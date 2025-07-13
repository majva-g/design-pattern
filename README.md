
# Composite Design Pattern

## 🧠 What is it?

The Composite Pattern is a structural design pattern that allows you to **compose objects into tree-like structures** to represent part-whole hierarchies. It enables clients to treat **individual objects** and **compositions of objects** uniformly.

---

## 🎯 What Problem Does It Solve?

In many applications, we work with both individual items and groups of items. The composite pattern solves the issue of having to treat them differently by providing a **common interface** for both. This simplifies client code and makes your design more flexible and extensible.

---

## 📦 When to Use It

- When you need to represent **part-whole hierarchies** (e.g., file systems, organizational charts, GUI components).
- When you want to treat **individual objects** and **composite groups** uniformly.
- When operations need to be applied **recursively** across a tree structure.

---

## 🧱 Structure (UML-like Diagram)

```
Component
  ├── Leaf
  └── Composite
          └── [Component...]
```

### Components:

- **Component**: Declares the interface for all concrete objects (both leaf and composite).
- **Leaf**: Represents end objects in the composition (no children).
- **Composite**: Stores child components and implements child-related operations.

---

## 🔧 How to Implement

1. Define a common interface or abstract class (`Component`) with relevant methods.
2. Implement `Leaf` classes that do the actual work (no children).
3. Implement `Composite` classes that store a list of `Component` and delegate operations to children.
4. Ensure client code interacts only with the `Component` interface.

---

## ✅ Example Use Cases

- Files and folders in a file system
- UI widgets (buttons, panels, containers)
- Organization charts (employees and managers)
- Product bundles in e-commerce systems
- HTML/XML rendering trees

---

## ❌ When NOT to Use It

- When the structure is **flat** and there’s no hierarchical data.
- When **performance** is critical — recursive calls can be costly.
- When components in the tree have **very different interfaces** that can’t be unified.

---

## ⚠️ Pros and Cons

### ✅ Pros:
- Simplifies client code
- Supports recursive structures naturally
- Easier to add new components

### ❌ Cons:
- Can make system overly general
- Might lead to too much flexibility (abuse of structure)
- Sometimes breaks **Interface Segregation Principle** if not designed carefully

---

## 🧪 Related Patterns

- **Decorator**: Both use recursive composition.
- **Iterator**: Can be used to traverse composites.
- **Visitor**: Useful for adding operations to composite structures.

---

## 📌 Summary

The Composite Pattern makes it easier to build complex structures using simple building blocks. It’s particularly useful for recursive, hierarchical models where uniformity simplifies interaction.



---

## 💡 Example (Generic, Language-Agnostic)

Imagine a graphics editor where everything is a `GraphicComponent`. A `Circle` and a `Rectangle` are simple elements (Leaf), while a `Group` is a Composite that can contain other components.

```
GraphicComponent
  ├── Circle (Leaf)
  ├── Rectangle (Leaf)
  └── Group (Composite)
          ├── Circle
          ├── Rectangle
          └── Group
```

### Pseudo-code

```plaintext
interface GraphicComponent {
    render()
}

class Circle implements GraphicComponent {
    render() {
        print("Rendering Circle")
    }
}

class Group implements GraphicComponent {
    children = []
    render() {
        for child in children:
            child.render()
    }
}
```

Usage:

```plaintext
circle = new Circle()
rectangle = new Rectangle()
group1 = new Group()
group1.add(circle)
group1.add(rectangle)

group2 = new Group()
group2.add(group1)
group2.render()
```

Output:
```
Rendering Circle
Rendering Rectangle
```

This allows users to build complex graphics from simple shapes in a consistent way.

