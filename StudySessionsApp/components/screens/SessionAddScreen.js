import Screen from "../layout/Screen";
import SessionForm from "../entities/sessions/SessionForm.js";
import sessionDB from "../../data/Database.js";

const SessionAddScreen = ({ navigation, route }) => {
  //Initialisations
  const { onAdd } = route.params;

  //State

  //Handlers
  const handleSubmit = (session) => {
    sessionDB.addSession(session, (insertedSession) => {
      console.log("Session has been uploaded", insertedSession);
      onAdd(session);
    });
  };

  const handleCancel = navigation.goBack;

  //View
  return (
    <Screen>
      <SessionForm onSubmit={handleSubmit} onCancel={handleCancel} />
    </Screen>
  );
};

export default SessionAddScreen;
