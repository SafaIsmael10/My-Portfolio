import { StyleSheet, Text, View, Pressable, ScrollView } from "react-native";
import Screen from "../layout/Screen.js";
import UserJoinForm from "../entities/users/UserJoinForm.js";
import sessionDB from "../../data/Database.js";

const SessionJoinScreen = ({ navigation, route }) => {
  const { handleJoin, session } = route.params;

  const handleCancel = navigation.goBack;

  const join = (user) => {
    sessionDB.joinSession(user, () => {
      handleJoin(user);
    });
    console.log("User has been uploaded", user.UserID);
  };

  return (
    <Screen>
      <UserJoinForm session={session} onSubmit={join} onCancel={handleCancel} />
    </Screen>
  );
};

export default SessionJoinScreen;
