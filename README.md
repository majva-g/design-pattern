# Proxy Design Pattern

## 🧠 What is the Proxy Pattern?

The **Proxy Pattern** is a structural design pattern that provides a surrogate or placeholder for another object to control access to it. A proxy can add additional functionality when accessing an object, such as caching, logging, access control, or lazy loading.

---

## 🎯 Why Use It?

- **Access Control**: Restrict access based on permissions.
- **Lazy Initialization**: Delay resource-heavy object creation until it's needed.
- **Logging & Auditing**: Track usage or access to sensitive operations.
- **Caching**: Store and reuse expensive or repeated data.
- **Remote Access**: Represent an object in a different address space (e.g., a remote server).

---

## 🧰 Where to Use It?

- Virtual proxies for loading large files or images on demand.
- Protection proxies for access control (e.g., admin-only access).
- Caching proxies for repeated API or database calls.
- Logging proxies for monitoring system behavior or audits.
- Remote proxies for invoking operations on remote objects.

---

## 🧩 Structure

```
Client --> Proxy --> RealSubject
```

- **Subject**: Interface common to RealSubject and Proxy.
- **RealSubject**: The actual object that does the real work.
- **Proxy**: Controls access and may perform additional tasks.

---

## 🛠 How to Implement

1. Define an interface or abstract class (Subject).
2. Implement the RealSubject class with core business logic.
3. Create a Proxy class implementing the same interface.
4. Add extra behavior (e.g., logging, caching) in the Proxy.
5. Let clients use the Proxy instead of directly using RealSubject.

---

## 📊 UML Diagram (Textual)

```
+-------------+       +-------------+       +--------------+
|   Client    | --->  |   Proxy     | --->  |  RealSubject |
+-------------+       +-------------+       +--------------+
        uses                delegates             does work
```

---

## 🚫 When NOT to Use It

- When performance is critical and extra layer causes overhead.
- When added complexity of Proxy is not justified.
- When real object is lightweight and always needed.

---

## ✅ Summary

| Feature           | Proxy Pattern                  |
|------------------|--------------------------------|
| Type              | Structural                     |
| Intent            | Control access to an object    |
| Key Benefit       | Add logic around existing object transparently |
| Common Uses       | Security, Logging, Caching, Lazy Load |

---

## 🧠 Related Patterns

- **Decorator**: Adds behavior without controlling access.
- **Adapter**: Converts one interface to another.
- **Facade**: Simplifies a subsystem, doesn't control a single object.---

## 📦 Example (Generic Pseudocode)

### Scenario: Lazy Loading a Large Document

```
interface Document {
    display()
}

class RealDocument implements Document {
    constructor(filename) {
        loadFromDisk(filename)
    }

    display() {
        print("Displaying document: " + filename)
    }
}

class ProxyDocument implements Document {
    constructor(filename) {
        this.filename = filename
        this.realDocument = null
    }

    display() {
        if (this.realDocument == null) {
            this.realDocument = new RealDocument(this.filename)
        }
        this.realDocument.display()
    }
}

// Client code
doc = new ProxyDocument("contract.pdf")
doc.display()  // Loads and displays
doc.display()  // Only displays (no loading)
```

**Explanation**: `ProxyDocument` delays loading of `RealDocument` until `display()` is called, saving resources if the document is never viewed.