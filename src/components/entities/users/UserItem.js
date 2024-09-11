import { Pressable, StyleSheet, Text, View } from "react-native";
import Icons from "../../UI/Icons";
import { Button, ButtonTray } from "../../UI/Button";
import sessionDB from "../../../data/Database.js";

const UserItem = ({ user, onLeave }) => {
  const leave = () => {
    const userID = user.UserID;
    sessionDB.leaveSession(userID, () => {
      onLeave(user);
    });
  };

  return (
    <View style={styles.item}>
      <Text style={styles.text}>
        {user.UserName}{" "}
        <Button
          label="Leave"
          icon={<Icons.Close />}
          onClick={leave}
          styleButton={{ backgroundColor: "mistyrose" }}
          styleLabel={{ color: "red" }}
        />
      </Text>
    </View>
  );
};

const styles = StyleSheet.create({
  item: { paddingVertical: 5 },
  text: { fontSize: 16 },
});

export default UserItem;
