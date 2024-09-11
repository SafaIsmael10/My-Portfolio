import {
  KeyboardAvoidingView,
  ScrollView,
  StyleSheet,
  Text,
  TextInput,
  View,
} from "react-native";
import { Picker } from "@react-native-picker/picker";
import { RadioButton } from "react-native-paper";
import Icons from "./Icons";
import { Button, ButtonTray } from "./Button";
import MyCalendar from "./Calendar.js";

const Form = ({ children, onSubmit, onCancel, submitLabel, submitIcon }) => {
  return (
    <KeyboardAvoidingView style={styles.formContainer}>
      <ScrollView contentContainerStyle={styles.formItems}>
        {children}
        <ButtonTray>
          <Button label={submitLabel} icon={submitIcon} onClick={onSubmit} />
          <Button label="Cancel" icon={<Icons.Close />} onClick={onCancel} />
        </ButtonTray>
      </ScrollView>
    </KeyboardAvoidingView>
  );
};

const InputText = ({ label, value, onChange }) => {
  return (
    <View style={styles.item}>
      <Text style={styles.itemLabel}>{label}</Text>
      <TextInput
        value={value}
        onChangeText={onChange}
        style={styles.itemTextInput}
      />
    </View>
  );
};

const InputSelect = ({ label, prompt, options, value, onChange }) => {
  return (
    <View style={styles.item}>
      <Text style={styles.itemLabel}>{label}</Text>
      <Picker
        mode="dropdown"
        selectedValue={value}
        onValueChange={onChange}
        style={styles.itemPicker}
      >
        <Picker.Item
          value={null}
          label={prompt}
          style={styles.itemPickerPrompt}
        />
        {options.map((option, index) => (
          <Picker.Item key={index} value={option.value} label={option.label} />
        ))}
      </Picker>
    </View>
  );
};

const ButtonSelect = ({ label, options, value, onChange }) => {
  return (
    <View style={styles.item}>
      <Text style={styles.itemLabel}>{label}</Text>
      {options.map((option) => (
        <View key={option.value}>
          <RadioButton.Item
            label={option.label}
            value={option.value}
            status={value === option.value ? "checked" : "unchecked"}
            onPress={() => onChange(option.value)}
          />
        </View>
      ))}
    </View>
  );
};

const Calendar = ({ label, value, onChange }) => {
  return (
    <View style={styles.item}>
      <Text style={styles.itemLabel}>{label}</Text>
      <MyCalendar selectedValue={value} onSelect={onChange} />
    </View>
  );
};

Form.InputText = InputText;
Form.InputSelect = InputSelect;
Form.ButtonSelect = ButtonSelect;
Form.Calendar = Calendar;

const styles = StyleSheet.create({
  formContainer: { gap: 10 },
  formItems: { gap: 5 },
  itemLabel: { color: "gray", fontSize: 16, marginBottom: 5 },
  itemTextInput: {
    height: 50,
    paddingLeft: 10,
    fontSize: 16,
    backgroundColor: "white",
    borderRadius: 7,
    borderWidth: 1,
    borderColor: "lightgray",
  },
  //itemPicker: { height: 50, backgroundColor: "whitesmoke" },
  itemPickerPrompt: { color: "gray" },
});

export default Form;
