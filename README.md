
# Adapter Pattern

## 🧠 What is the Adapter Pattern?

The Adapter Pattern is a **structural design pattern** that allows incompatible interfaces to work together. It acts as a bridge between two objects, enabling classes with mismatched interfaces to collaborate without changing their existing code.

> "Convert the interface of a class into another interface clients expect."

---

## 🎯 Purpose

The main goal of the Adapter Pattern is to **reuse existing classes** that don’t match the interface required by the current system.

---

## 📦 When to Use

Use the Adapter Pattern when:

- You want to use a class, but its interface doesn’t match what your code expects.
- You cannot modify the source code of the class you need to use (e.g. it's from a third-party library or legacy code).
- You need to unify multiple interfaces into one common interface.

---

## 🧱 Structure

```
Client --> Target (interface expected by client)
                 ^
                 |
             Adapter --> adapts --> Adaptee (incompatible class)
```

---

## 🛠 How to Implement

1. Define the **Target interface** that your system expects.
2. Use or refer to the existing class (called **Adaptee**) with an incompatible interface.
3. Create an **Adapter** class that implements the Target interface and internally uses an instance of the Adaptee to convert calls.

---

## ✅ Example (Conceptual)

```plaintext
Interface: MediaPlayer
Class: AudioPlayer (supports MP3)
Class: VLCPlayer (only supports VLC)

Adapter: MediaAdapter (wraps VLCPlayer to make it behave like a MediaPlayer)
```

---

## 🧑‍💻 Code-Agnostic Pseudocode

```plaintext
interface Target {
    request()
}

class Adaptee {
    specificRequest()
}

class Adapter implements Target {
    adaptee

    request() {
        adaptee.specificRequest()
    }
}
```

---

## 🌍 Real-World Analogy

A **travel adapter** for power outlets: your laptop plug doesn’t fit into a wall socket in another country. You use an adapter that makes it possible to plug in and use your device.

---

## 🚫 When NOT to Use

Avoid using Adapter Pattern when:

- You can refactor or directly modify the existing code.
- The adapter logic becomes too complex and starts introducing performance or maintenance issues.
- Multiple adapters start overlapping and lead to architectural confusion.

---

## ⚖️ Pros and Cons

| Pros                              | Cons                                           |
|-----------------------------------|------------------------------------------------|
| Reuse existing, incompatible code | Can add complexity if overused                |
| Separates adapter logic cleanly  | May hide true nature of adapted class behavior |
| Adheres to Open/Closed Principle | Hard to manage many adapters together         |

---

## 📚 Summary

- **Pattern Type**: Structural
- **Problem**: Incompatible interfaces
- **Solution**: Convert one interface into another
- **Key Components**: Target, Adapter, Adaptee, Client
