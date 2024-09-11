import { ScrollView, StyleSheet } from "react-native";
import SessionItem from "./SessionItem.js";

const SessionList = ({ sessions, onSelect }) => {
  return (
    <ScrollView style={styles.container}>
      {sessions.map((session, index) => {
        return (
          <SessionItem
            key={index}
            session={session}
            onSelect={onSelect}
          />
        );
      })}
    </ScrollView>
  );
};

const styles = StyleSheet.create({
  container: {},
});

export default SessionList;
