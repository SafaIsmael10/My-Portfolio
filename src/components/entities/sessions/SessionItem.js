import { Pressable, StyleSheet, Text, View } from "react-native";

const SessionItem = ({ session, onSelect }) => {
  return (
    <Pressable onPress={() => onSelect(session)}>
      <View style={styles.item}>
        <Text style={styles.text}>
          {session.SessionSubject} {session.SessionTime}
        </Text>
      </View>
    </Pressable>
  );
};

const styles = StyleSheet.create({
  item: { paddingVertical: 15, borderTopWidth: 1, borderColor: "black" },
  text: { fontSize: 16 },
});

export default SessionItem;
