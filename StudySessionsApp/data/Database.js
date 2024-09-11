import * as SQLite from "expo-sqlite";

const database = SQLite.openDatabase("sessionDB");

database.transaction((tx) => {
  tx.executeSql(
    "CREATE TABLE IF NOT EXISTS sessions (SessionID INTEGER PRIMARY KEY AUTOINCREMENT, SessionRoom TEXT, SessionDate TEXT, SessionTime TEXT, SessionCapacity INTEGER, SessionDuration INTEGER, SessionSubject TEXT);"
  );
});

database.transaction((tx) => {
  tx.executeSql(
    "CREATE TABLE IF NOT EXISTS users (UserID INTEGER PRIMARY KEY AUTOINCREMENT, UserName TEXT, SessionID INTEGER)"
  );
});

// add sessions into table
const addSession = (session, callback) => {
  const {
    SessionID,
    SessionRoom,
    SessionDate,
    SessionTime,
    SessionCapacity,
    SessionDuration,
    SessionSubject,
  } = session;
  database.transaction(
    (tx) => {
      tx.executeSql(
        "INSERT INTO sessions (SessionID, SessionRoom, SessionDate, SessionTime, SessionCapacity, SessionDuration, SessionSubject) VALUES (?, ?, ?, ?, ?, ?, ?);",
        [
          SessionID,
          SessionRoom,
          SessionDate,
          SessionTime,
          SessionCapacity,
          SessionDuration,
          SessionSubject,
        ]
      );
    },
    null,
    callback
  );
};

// get sessions from table
const getSessions = (callback) => {
  database.transaction((tx) => {
    tx.executeSql(
      "SELECT * FROM sessions ORDER BY SessionTime;",
      [],
      (_, { rows }) => {
        // order by time
        const sessions = rows._array;
        callback(sessions);
      }
    );
  });
};

// delete session from table
const deleteSession = (SessionID, callback) => {
  database.transaction(
    (tx) => {
      tx.executeSql("DELETE FROM sessions WHERE SessionID = ?;", [SessionID]);
    },
    null,
    callback
  );
};
//----------------------------------------------------------------------------------------------------
// add user to session
const joinSession = (user, callback) => {
  const { UserID, UserName, SessionID } = user;
  database.transaction(
    (tx) => {
      tx.executeSql(
        "INSERT INTO users (UserID, UserName, SessionID) VALUES (?, ?, ?);",
        [UserID, UserName, SessionID]
      );
    },
    null,
    callback
  );
};

// remove user from session
const leaveSession = (UserID, callback) => {
  database.transaction(
    (tx) => {
      tx.executeSql("DELETE FROM users WHERE UserID = ?;", [UserID]);
    },
    null,
    callback
  );
};

// get users for selected session
const getUsers = (sessionID, callback) => {
  database.transaction((tx) => {
    tx.executeSql(
      "SELECT * FROM users WHERE SessionID = ?;",
      [sessionID],
      (_, { rows }) => {
        const users = rows._array;
        callback(users);
      }
    );
  });
};

const updateSessionCapacity = (SessionID, newCapacity, callback) => {
  database.transaction(
    (tx) => {
      tx.executeSql(
        "UPDATE sessions SET SessionCapacity = ? WHERE SessionID = ?;",
        [newCapacity, SessionID]
      );
    },
    null,
    callback
  );
};

export default {
  addSession,
  getSessions,
  deleteSession,
  joinSession,
  leaveSession,
  getUsers,
  updateSessionCapacity,
};
