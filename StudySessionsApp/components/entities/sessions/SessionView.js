import { Alert, StyleSheet, Text, View } from "react-native";
import Icons from "../../UI/Button.js";
import { Button, ButtonTray } from "../../UI/Button.js";

const SessionView = ({ session }) => {
  return (
    <View style={styles.container}>
      <View style={styles.infoTray}>
        <Text style={styles.text}>Study Subject: {session.SessionSubject}</Text>
        <Text style={styles.text}> Room: {session.SessionRoom} </Text>
        <Text style={styles.text}> Date: {session.SessionDate} </Text>
        <Text style={styles.text}> Time: {session.SessionTime} </Text>
        <Text style={styles.text}> Capacity: {session.SessionCapacity} </Text>
        <Text style={styles.text}>
          Duration: {session.SessionDuration} Hours
        </Text>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: { gap: 15 },
  infoTray: { gap: 5, padding: 10 },
  text: { fontSize: 16 },
  boldText: { fontsize: 16, fontWeight: "bold" },
});

export default SessionView;
