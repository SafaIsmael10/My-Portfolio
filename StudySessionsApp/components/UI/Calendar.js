import { useState } from "react";
import { Calendar } from "react-native-calendars";

const MyCalendar = ({ onSelect }) => {
  const [markedDates, setMarkedDates] = useState({
    "2024-03-21": { selected: true, marked: true, selectedColor: "#959BF6" },
  });

  const onDayPress = (day) => {
    const newMarkedDates = {
      [day.dateString]: {
        selected: true,
        marked: true,
        selectedColor: "#959BF6",
      },
    };
    setMarkedDates(newMarkedDates);
    onSelect(day?.dateString);
  };

  return (
    <Calendar
      current={Date.now()}
      markedDates={markedDates}
      onDayPress={onDayPress}
    />
  );
};

export default MyCalendar;
