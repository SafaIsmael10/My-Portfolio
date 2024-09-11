import { useState, useEffect, useCallback } from "react";
import { LogBox, StyleSheet, Text, View, Vibration } from "react-native";
import { useFocusEffect } from "@react-navigation/native";
import SessionList from "../entities/sessions/SessionList.js";
import Screen from "../layout/Screen.js";
import Icons from "../UI/Icons";
import { Button, ButtonTray } from "../UI/Button";
import sessionDB from "../../data/Database.js";
import { TextInput } from "react-native-gesture-handler";

const SessionListScreen = ({ navigation }) => {
  // Initialisations
  LogBox.ignoreLogs([
    "Non-serializable values were found in the navigation state",
    "Failed prop type"
  ]);

  // State
  const [sessions, setSessions] = useState([]);
  const [searchVal, setSearchVal] = useState("");
  const [filteredDateSource, setfilteredDatesource] = useState([]);
  const [selectedDate, setSelectedDate] = useState("");

  const sessionData = () => {
    sessionDB.getSessions((result) => {
      const sessions = result || [];
      console.log("Sessions from database: ");
      setSessions(sessions);
    });
  };
  useEffect(() => {
    sessionData();
    setfilteredDatesource(sessions);
  }, []);
  useFocusEffect(
    useCallback(() => {
    sessionData();
  }, [])
  );

  // Handlers
  const handleAdd = (session) => {
    setSessions((prevSessions) => [...prevSessions, session]);
    Vibration.vibrate(500);
  };
  const handleDelete = (session) => {
    setSessions(
      sessions.filter((item) => item.SessionID !== session.SessionID)
    );
    Vibration.vibrate(500);
  };

  const handleJoin = (session) => {
    console.log("Joining Session", session.SessionID);
    Vibration.vibrate(500);
  };
  const handleLeave = (session) => {
    console.log("Leaving Session", session.SessionID);
    Vibration.vibrate(500);
  };

  const onAdd = (session) => {
    handleAdd(session);
    navigation.goBack();
  };
  const onDelete = (session) => {
    handleDelete(session);
    navigation.goBack();
  };

  const onJoin = (session) => {
    handleJoin(session);
    navigation.goBack();
  };
  const onLeave = (session) => {
    handleLeave(session);
    navigation.goBack();
  };

  const goToViewScreen = (session) =>
    navigation.navigate("SessionViewScreen", {
      session,
      onDelete,
      onJoin,
      onLeave,
    });
  const goToAddScreen = () => {
    navigation.navigate("SessionAddScreen", { onAdd });
  };

  const handleFilter = (txt) => {
    if (txt != "") {
      const filtered = sessions?.filter((s) =>
        s?.SessionSubject?.toUpperCase()?.includes(txt?.toUpperCase())
      );
      setfilteredDatesource;
    } else {
      setfilteredDatesource(sessions);
    }
    setSearchVal(txt);
  };

  //View
  return (
    <Screen>
      <ButtonTray>
        <Button
          label="Add Session"
          icon={<Icons.Add />}
          onClick={goToAddScreen}
        />
      </ButtonTray>
      <TextInput
        placeholder="Search"
        value={searchVal}
        onChangeText={(txt) => setSearchVal(txt)}
        style={styles.searchBar}
      />
      <SessionList
        sessions={sessions?.filter((s) =>
          s?.SessionSubject?.toUpperCase()?.includes(searchVal?.toUpperCase())
        )}
        onSelect={goToViewScreen}
      />
    </Screen>
  );
};

const styles = StyleSheet.create({
  searchBar: {
    height: 50,
    paddingLeft: 10,
    fontSize: 16,
    backgroundColor: "white",
    borderRadius: 7,
    borderWidth: 1,
    borderColor: "lightgray",
    marginVertical: 10,
  },
});

export default SessionListScreen;
