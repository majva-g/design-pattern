
# Singleton Pattern – Exercises for Frontend and Backend Developers

## 🔧 Backend Exercises

### 1. Logger Singleton
**Task**: Implement a `Logger` class as a Singleton to be used across your backend application.

**Goals**:
- Ensure only one instance of Logger exists.
- Store logs in memory.
- Add a method to retrieve all logs.

---

### 2. Configuration Manager
**Task**: Create a Singleton `ConfigManager` that loads configuration values from a file (e.g., JSON or ENV file).

**Goals**:
- Make sure only one instance exists throughout the app.
- Provide methods to get and set configuration values.

---

### 3. Database Connection Pool
**Task**: Implement a Singleton to manage database connections.

**Goals**:
- Ensure a single shared instance is reused.
- Optionally limit the number of simultaneous connections.

---

### 4. Caching Layer
**Task**: Build a Singleton cache system.

**Goals**:
- Store key-value pairs globally.
- Methods: `set(key, value)`, `get(key)`, `clear()`.

---

## 🎨 Frontend Exercises

### 1. Theme Manager Singleton
**Task**: Implement a Singleton that manages light/dark themes across the app.

**Goals**:
- Centralize theme state.
- Provide methods to switch and retrieve the current theme.

---

### 2. Global State Manager
**Task**: Create a Singleton state store (without using Redux or similar libraries).

**Goals**:
- Keep application-wide state.
- Allow components to subscribe and react to state changes.

---

### 3. Analytics Tracker
**Task**: Build a Singleton that logs user interactions (clicks, views, etc.).

**Goals**:
- Buffer events and print them in the console or send to a mock API.

---

### 4. Modal Manager
**Task**: Design a Singleton that handles the creation and destruction of modal dialogs.

**Goals**:
- Ensure modals are globally accessible.
- Prevent multiple modals from overlapping unexpectedly.

---

## 💡 Challenge Exercise (Full-Stack)

### Shared Session Manager
**Task**: Implement a Singleton `SessionManager` both in backend and frontend that keeps track of user session state.

**Backend**:
- Ensure session data is accessed consistently and securely.

**Frontend**:
- Keep track of the logged-in user.
- Automatically expire session after timeout.

---

Happy Coding! 🚀
