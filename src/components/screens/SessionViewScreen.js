import { useState, useEffect, useCallback } from "react";
import { Alert, StyleSheet, Text, ScrollView } from "react-native";
import { useFocusEffect } from "@react-navigation/native";
import Screen from "../layout/Screen.js";
import SessionView from "../entities/sessions/SessionView.js";
import UserList from "../entities/users/UserList.js";
import Icons from "../UI/Icons";
import { Button, ButtonTray } from "../UI/Button";
import sessionDB from "../../data/Database.js";

const SessionViewScreen = ({ navigation, route }) => {
  // Initialisations
  const { session, onDelete, onJoin, onLeave } = route.params;

  //State
  const [users, setUsers] = useState([]);
  const [availableSlots, setAvailableSlots] = useState(session.SessionCapacity);

  const sessionID = session.SessionID;
  const userData = () => {
    sessionDB.getUsers(sessionID, (result) => {
      const users = result || [];
      console.log("Users from database: ", result);
      setUsers(users);
    });
  };
  useEffect(() => {
    userData();
  }, []);

  useFocusEffect(
    useCallback(() => {
    userData();
  }, [])
  );

  //Handlers
  const goBack = navigation.goBack;

  const requestDelete = () =>
    Alert.alert(
      "Delete Warning",
      "Are you sure you want to delete this session",
      [{ text: "Cancel" }, { text: "Delete", onPress: handleDelete }]
    );
  const handleDelete = () => {
    sessionDB.deleteSession(sessionID, () => {
      console.log("Session has been deleted", sessionID);
      onDelete(session);
    });
  };

  const handleJoin = (session) => {
    if (availableSlots > 0) {
      setAvailableSlots((prevSlots) => prevSlots - 1);
      onJoin(session);
    } else {
    }
  };

  const handleLeave = () => {
    console.log("User left session");
    onLeave(session);
  };

  const goToJoinScreen = () =>
    navigation.navigate("SessionJoinScreen", { session, handleJoin });

  //View
  return (
    <Screen>
      <ScrollView>
        <ButtonTray>
          <Button
            label="Return To Menu"
            icon={<Icons.Close />}
            onClick={goBack}
          />
        </ButtonTray>

        <SessionView session={session} />
        <Text style={styles.text}>Available Slots: {availableSlots}</Text>

        <ButtonTray>
          <Button label="Join" icon={<Icons.Add />} onClick={goToJoinScreen} />
        </ButtonTray>

        <UserList users={users} onLeave={handleLeave} style={styles.list} />

        <ButtonTray>
          <Button
            label="Delete"
            icon={<Icons.Delete />}
            onClick={requestDelete}
            styleButton={{ backgroundColor: "mistyrose", margin: 10 }}
            styleLabel={{ color: "red" }}
          />
        </ButtonTray>
        <Text>{session.SessionID}</Text>
      </ScrollView>
    </Screen>
  );
};

const styles = StyleSheet.create({
  text: { fontSize: 24, padding: 5 },
  list: { paddign: 10 },
});

export default SessionViewScreen;
