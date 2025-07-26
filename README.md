
# Decorator Pattern

## What is the Decorator Pattern?

The **Decorator Pattern** is a structural design pattern that allows behavior to be added to an individual object, dynamically, without affecting the behavior of other objects from the same class.

It is achieved by creating a set of decorator classes that are used to wrap concrete components.

---

## When and Why to Use It

### ✅ Use When:
- You want to add responsibilities to individual objects dynamically and transparently, without affecting other objects.
- Subclassing would lead to an explosion of classes to support every combination of behaviors.
- You want to adhere to the **Open/Closed Principle** — classes should be open for extension but closed for modification.

### ❌ Don’t Use When:
- You need global changes to all instances of a class.
- The object lifecycle or state must remain strictly controlled.
- Simplicity is more important than flexibility (e.g., small scripts).

---

## Real-World Examples

- **Middleware in Web Frameworks** (e.g., logging, authentication, rate-limiting)
- **GUI components** (e.g., adding borders, scrollbars, shadows)
- **IO Streams** (buffered, compressed, encrypted streams)
- **Validation pipelines** (chaining multiple rules together)

---

## UML Diagram (Text Version)

```
       +-------------------+
       |   Component       |<-----------------+
       | (Interface)       |                  |
       +-------------------+                  |
                ^                             |
                |                             |
+---------------------------+       +-----------------------+
|    ConcreteComponent      |       |     Decorator         |
|  (Original implementation)|       | (Abstract base class) |
+---------------------------+       +-----------------------+
                                        ^
                                        |
                        +------------------------------+
                        |    ConcreteDecoratorA        |
                        +------------------------------+
                        |    ConcreteDecoratorB        |
                        +------------------------------+
```

---

## How to Implement (Generic Steps)

1. **Define a common interface or abstract class** (Component).
2. **Implement the core functionality** in a ConcreteComponent.
3. **Create an abstract Decorator class** that implements the same interface and wraps a Component.
4. **Create ConcreteDecorator classes** that extend the Decorator and add behavior.
5. **Compose your object by wrapping it with decorators** as needed.

---

## Example Scenario

### Problem:
You have a document exporting system. You want to export files in plain text, but sometimes encrypted, sometimes compressed, and sometimes both.

### Without Decorator:
- You’d need a class for every combination (e.g., `EncryptedCompressedExporter`, `EncryptedExporter`, etc.)

### With Decorator:
- You have `TextExporter`.
- You wrap it in `EncryptionDecorator`, then in `CompressionDecorator` as needed.

```plaintext
DocumentExporter → EncryptionDecorator → CompressionDecorator → TextExporter
```

---

## Pros
- Flexible and composable behavior.
- Promotes single responsibility.
- Adheres to Open/Closed Principle.

## Cons
- Can become complex with many small classes.
- Difficult to debug if chain is long.
- Order of decorators affects behavior.

---

## When Not to Use
- When the number of combinations is manageable via simple subclassing.
- When you need to share behavior across instances.
- When decorators introduce side effects or impact performance unnecessarily.

---

## Summary
The **Decorator Pattern** is a powerful tool for adding behavior to objects in a flexible and reusable way. It should be used when behavior needs to vary dynamically, and composition is preferred over inheritance.
