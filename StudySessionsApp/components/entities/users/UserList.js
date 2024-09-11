import { ScrollView, StyleSheet, Text } from "react-native";
import UserItem from "./UserItem.js";

const UserList = ({ users, onLeave }) => {
  return (
    <ScrollView style={styles.container}>
      <Text style={styles.text}>Attending Users:</Text>
      {users.map((user) => {
        return <UserItem key={user.UserID} user={user} onLeave={onLeave} />;
      })}
    </ScrollView>
  );
};

const styles = StyleSheet.create({
  container: { padding: 5 },
  text: { fontSize: 16 },
});

export default UserList;
