
# Factory Method Design Pattern

## What is Factory Method?

The **Factory Method** is a **creational design pattern** that provides an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.

Instead of calling a constructor directly to create an object, you define a **factory method** that returns the object. This promotes loose coupling between classes and supports **open/closed** principle.

---

## Why Use It?

- To **decouple** the code that creates objects from the code that uses them.
- To enable **extensibility**: you can add new product types without modifying existing code.
- To follow **SOLID principles**:
  - Open/Closed Principle (classes should be open for extension but closed for modification)
  - Single Responsibility Principle (separating object creation logic)

---

## When to Use It?

- When a class cannot anticipate the class of objects it needs to create.
- When a class wants its subclasses to specify the objects it creates.
- When you want to avoid tight coupling between the creator and the concrete classes.

---

## How to Implement?

1. **Define a common interface or abstract class** for all products.
2. **Create concrete implementations** of that product interface.
3. **Define an abstract creator** class with a factory method.
4. **Subclasses override** the factory method to return different concrete products.

---

## UML Diagram

```
        +-------------------+
        |   Creator         |<-----------------------+
        |-------------------|                        |
        | + factoryMethod() |                        |
        +-------------------+                        |
                 ^                                   |
                 |                                   |
    +--------------------------+           +--------------------------+
    | ConcreteCreatorA         |           | ConcreteCreatorB         |
    |--------------------------|           |--------------------------|
    | + factoryMethod():Product|           | + factoryMethod():Product|
    +--------------------------+           +--------------------------+

                 |                                   |
                 v                                   v
         +-----------------+              +-----------------+
         | ProductA        |              | ProductB        |
         +-----------------+              +-----------------+
                   ^                               ^
                   |                               |
              +------------------------+
              |      Product (interface)|
              +------------------------+
```

---

## Example (Pseudocode)

```
interface Product {
    operation()
}

class ProductA implements Product {
    operation() => "ProductA logic"
}

class ProductB implements Product {
    operation() => "ProductB logic"
}

abstract class Creator {
    abstract factoryMethod(): Product

    doSomething() {
        product = this.factoryMethod()
        product.operation()
    }
}

class ConcreteCreatorA extends Creator {
    factoryMethod() => new ProductA()
}

class ConcreteCreatorB extends Creator {
    factoryMethod() => new ProductB()
}

// Usage
creator = new ConcreteCreatorA()
creator.doSomething()
```

---

## Benefits

- Code is easier to maintain and extend.
- Reduces dependency on concrete classes.
- Makes testing easier (e.g., mocking product objects).

---

## Drawbacks

- May increase the number of classes in the system.
- Can add complexity compared to direct instantiation.

---

## Related Patterns

- **Abstract Factory**: creates families of related objects.
- **Builder**: constructs complex objects step by step.
- **Prototype**: clones existing objects instead of creating new ones.
