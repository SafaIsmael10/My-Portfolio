import { useState } from "react";
import Icons from "../../UI/Icons.js";
import Form from "../../UI/Form.js";

const UserJoinForm = ({ session, originalUser, onSubmit, onCancel }) => {
  const defaultUser = {
    UserName: null,
    SessionID: session.SessionID,
  };

  const [user, setUser] = useState(originalUser || defaultUser);

  const handleChange = (field, value) => setUser({ ...user, [field]: value });
  const handleSubmit = () => onSubmit(user);
  return (
    <Form
      onSubmit={handleSubmit}
      onCancel={onCancel}
      submitLabel="Join"
      submitIcon={<Icons.Add />}
    >
      <Form.InputText
        label="Name"
        value={user.UserName}
        onChange={(value) => handleChange("UserName", value)}
      />
    </Form>
  );
};

export default UserJoinForm;
