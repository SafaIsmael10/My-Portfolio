import { useState } from "react";
import Icons from "../../UI/Icons.js";
import Form from "../../UI/Form.js";
import MyCalendar from "../../UI/Calendar.js";
import { Text } from "react-native";

const defaultSession = {
  SessionID: null,
  SessionRoom: null,
  SessionDate: null,
  SessionTime: null,
  SessionCapacity: null,
  SessionDuration: null,
  SessionSubject: null,
};

const SessionForm = ({ originalSession, onSubmit, onCancel }) => {
  const rooms = [
    { value: "A101", label: "A101" },
    { value: "B102", label: "B102" },
    { value: "C303", label: "C303" },
    { value: "A404", label: "A404" },
  ];

  const times = [
    { value: "12:00", label: "12:00" },
    { value: "13:00", label: "13:00" },
    { value: "14:00", label: "14:00" },
    { value: "15:00", label: "15:00" },
    { value: "16:00", label: "16:00" },
    { value: "17:00", label: "17:00" },
    { value: "18:00", label: "18:00" },
  ];

  const capacities = [
    { value: 6, label: "6" },
    { value: 8, label: "8" },
    { value: 10, label: "10" },
  ];

  const durations = [
    { value: 1, label: "1 Hour" },
    { value: 2, label: "2 Hours" },
    { value: 3, label: "3 Hours" },
  ];

  const [session, setSession] = useState(originalSession || defaultSession);

  const handleChange = (field, value) =>
    setSession({ ...session, [field]: value });
  const handleSubmit = () => {
    if (!session.SessionRoom || !session.SessionDate || !session.SessionTime || !session.SessionCapacity || !session.SessionDuration || !session.SessionSubject) {
      alert("Please fill out all input fields");
      return;
    }
    onSubmit(session);
  }

  const submitLabel = originalSession ? "Modify" : "Add";
  const submitIcon = originalSession ? <Icons.Modify /> : <Icons.Add />;
  return (
    <Form
      onSubmit={handleSubmit}
      onCancel={onCancel}
      submitLabel={submitLabel}
      submitIcon={submitIcon}
    >
      <Form.InputSelect
        label="Session Room"
        prompt="Select Session Room"
        value={session.SessionRoom}
        options={rooms}
        onChange={(value) => handleChange("SessionRoom", value)}
      />
      <Form.InputText
        label="Session Date"
        value={session.SessionDate}
        onChange={(value) => handleChange("SessionDate", value)}
      />
      <Form.Calendar
        label="Date"
        onChange={(value) => handleChange("SessionDate", value)}
      />
      <Form.InputSelect
        label="Session Time"
        prompt="Select Session Time"
        value={session.SessionTime}
        options={times}
        onChange={(value) => handleChange("SessionTime", value)}
      />
      <Form.ButtonSelect
        label="Session Capacity"
        value={session.SessionCapacity}
        options={capacities}
        onChange={(value) => handleChange("SessionCapacity", value)}
      />
      <Form.InputSelect
        label="Session Duration"
        prompt="Select Session Duration"
        value={session.SessionDuration}
        options={durations}
        onChange={(value) => handleChange("SessionDuration", value)}
      />
      <Form.InputText
        label="Session Subject"
        value={session.SessionSubject}
        onChange={(value) => handleChange("SessionSubject", value)}
      />
    </Form>
  );
};

export default SessionForm;
