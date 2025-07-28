# Bridge Pattern

## 🧠 What is Bridge Pattern?

The **Bridge Pattern** is a structural design pattern that decouples an abstraction from its implementation, allowing the two to vary independently.

In simpler terms: It lets you **separate what you do from how you do it**.

---

## ✅ Why Use It?

- To **avoid a class explosion** when you have multiple dimensions of variation.
- To **separate concerns**: abstraction logic and platform-specific implementation logic.
- To **improve flexibility** and reduce tight coupling between components.
- To follow **SOLID principles**: especially the Dependency Inversion Principle and Single Responsibility Principle.

---

## 📌 When to Use

- When you have a class that can vary in **multiple orthogonal dimensions** (e.g., shape + color, report + format, UI + platform).
- When you want to **reuse code across multiple abstraction-implementation combinations**.
- When both abstraction and implementation need to be **extended independently**.

---

## 🛠️ How It Works

The pattern involves four key components:

1. **Abstraction**: Defines the abstraction's interface and maintains a reference to an implementor.
2. **Refined Abstraction**: Extends the interface defined by Abstraction.
3. **Implementor**: Interface for implementation classes.
4. **Concrete Implementors**: Implement the Implementor interface and provide platform-specific behavior.

---

## 🖼️ UML Diagram

```
      +-------------------+        uses       +------------------------+
      |   Abstraction     | ----------------> |     Implementor        |
      +-------------------+                  +------------------------+
      | - implementor     |                  | +operationImpl()       |
      | +operation()      |                  +------------------------+
      +-------------------+                               ▲
              ▲                                            |
              |                                            |
+---------------------------+                +----------------------------+
|   RefinedAbstraction      |                |   ConcreteImplementorA     |
+---------------------------+                +----------------------------+
| +operation()              |                | +operationImpl()           |
+---------------------------+                +----------------------------+
                                           
                                              +----------------------------+
                                              |   ConcreteImplementorB     |
                                              +----------------------------+
                                              | +operationImpl()           |
                                              +----------------------------+
```

---

## 💡 Real-World Example (Conceptual)

**Scenario**: You are building a reporting system.

- Reports can be: SalesReport, UserReport
- Output formats can be: PDF, HTML, JSON

Instead of writing classes for every combination like `SalesReportPDF`, `UserReportHTML`, etc., you split the logic:
- **Abstraction** = Report types
- **Implementor** = Formatters

This reduces complexity and increases flexibility.

---

## 🚫 When NOT to Use

- When your class hierarchy is **simple** and unlikely to grow in multiple directions.
- When **inheritance alone is sufficient** to solve your problem.
- When abstraction and implementation are **not expected to change independently**.

Overengineering with Bridge can make the code unnecessarily complex if it's not needed.

---

## ✔️ Benefits

- Independent extensibility of abstraction and implementation
- Cleaner, more modular code
- Avoids combinatorial explosion of subclasses
- Better testability and maintainability

---

## ❌ Drawbacks

- Adds complexity with additional layers of abstraction
- Might be **overkill** for small or static class hierarchies

---

## 🔚 Summary

Bridge is a powerful design pattern that helps you manage complexity when dealing with multiple dimensions of change. Use it wisely to balance **flexibility** with **simplicity**.