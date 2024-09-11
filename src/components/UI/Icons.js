import { MaterialIcons } from "@expo/vector-icons";

const Icons = {};

const Add = () => <MaterialIcons name="add" size={16} />;
const Modify = () => <MaterialIcons name="edit" size={16} />;
const Delete = () => <MaterialIcons name="delete" size={16} />;
const Close = () => <MaterialIcons name="close" size={16} />;

Icons.Add = Add;
Icons.Modify = Modify;
Icons.Delete = Delete;
Icons.Close = Close;

export default Icons;
