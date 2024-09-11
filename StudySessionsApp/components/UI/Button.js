import React from 'react';
import { Pressable, StyleSheet, Text, View } from 'react-native';

export const Button = ({ label, icon, onClick, styleLabel, styleButton }) => {

  return (
    <Pressable
      onPress={onClick}
      style={({ pressed }) => [
        styles.button,
        styleButton,
        pressed
          ? { shadowColor: "#00ff00", backgroundColor: "#959BF6" }  
          : { shadowColor: "#00008B", backgroundColor: "#B5B9F9" }, 
      ]}
    >
      {icon ? icon : null}
      <Text style={[styles.label, styleLabel]}>{label}</Text>
    </Pressable>
  );
};

export const ButtonTray = ({ children }) => {
  return <View style={styles.buttonTray}>{children}</View>;
};

const styles = StyleSheet.create({
  button: { 
    minHeight: 50,
    borderWidth: 1,
    borderRadius: 7,
    borderColor: "white",
    alignItems: "center",
    justifyContent: "center",
    padding: 3,
    flex: 1,
    flexDirection: "row",
    gap: 5,
    elevation: 5,
    shadowOpacity: 0.5,
    shadowRadius: 3,
    shadowOffset: { width: 0, height: 0 },
  },
  buttonTray: { flexDirection: "row", gap: 15 },
  label: { fontSize: 16 },
});
