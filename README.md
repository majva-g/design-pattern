
# Singleton Design Pattern

## What is Singleton?

The **Singleton** is a **creational design pattern** that ensures a class has only one instance and provides a global access point to that instance.

This pattern is useful when exactly one object is needed to coordinate actions across the system.

---

## Why Use Singleton?

- **Controlled Access to a Single Instance**  
  Ensures only one object of a class is created and used throughout the application.

- **Shared Resource**  
  Ideal when you want to manage shared resources like database connections, configuration settings, or thread pools.

- **Global State**  
  Useful when you need to maintain global state or cache across multiple parts of your application.

---

## Common Use Cases

- Configuration managers  
- Logging services  
- Thread or connection pools  
- File or database access objects  
- Caching systems

---

## How to Implement It (Language-Neutral Pseudocode)

```pseudo
class Singleton {
    private static instance: Singleton = null

    // Private constructor to prevent direct instantiation
    private Singleton() {
        // Initialization code
    }

    public static getInstance(): Singleton {
        if instance == null then
            instance = new Singleton()
        return instance
    }
}
```

**Key points:**
- Constructor is private to prevent external instantiation.
- A static method controls access to the single instance.
- Instance is lazily created (on first use) and cached.

---

## UML Diagram

```plaintext
+---------------------+
|     Singleton       |
+---------------------+
| - instance: Singleton |
+---------------------+
| + getInstance(): Singleton |
+---------------------+
```

**Legend:**
- `-` = private member
- `+` = public method

---

## Considerations

- **Thread Safety**: In multithreaded applications, ensure that the `getInstance()` method is thread-safe.
- **Testing**: Singleton can make unit testing harder due to shared state.
- **Dependency Injection**: Singleton pattern can sometimes be replaced with dependency injection frameworks for better testability.

---

## Variants

- **Eager Initialization**: Create the instance at class loading time.
- **Lazy Initialization**: Create the instance when first requested (as above).
- **Thread-Safe Singleton**: Uses locks or synchronization to ensure thread-safety.

---

## Alternatives

If you need multiple instances (e.g., for different configurations or testability), consider using:
- **Factory Pattern**
- **Service Locator**
- **Dependency Injection**
