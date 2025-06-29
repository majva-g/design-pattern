# Strategy Design Pattern

## What is the Strategy Pattern?

The **Strategy Pattern** is a behavioral design pattern that enables selecting an algorithm's behavior at runtime. It defines a family of algorithms, encapsulates each one, and makes them interchangeable. The pattern allows the algorithm to vary independently from the clients that use it.

## Benefits

- **Flexibility**: Easily swap out different behaviors/algorithms.
- **Maintainability**: Reduces conditional statements like `if-else` or `switch` logic.
- **Open/Closed Principle**: Easily add new strategies without modifying existing code.

## When to Use

- When you have multiple algorithms for a specific task and want to switch between them.
- When you want to isolate the implementation of specific behaviors from the main logic.
- When using many conditional statements to select behaviors.

## Structure

### Participants

- **Context**: Maintains a reference to a Strategy object and is configured with a ConcreteStrategy object.
- **Strategy (interface/abstract class)**: Declares an interface common to all supported algorithms.
- **ConcreteStrategies**: Implement the Strategy interface with different algorithms.

## UML Diagram

```
+----------------+
|   Context      |
|----------------|
| - strategy     |
|----------------|
| +setStrategy() |
| +execute()     |
+--------+-------+
         |
         v
+--------+---------+       +---------------------+
|      Strategy     |<------+ ConcreteStrategyA  |
| (interface/base)  |       +---------------------+
+------------------+       +---------------------+
                           | ConcreteStrategyB   |
                           +---------------------+
```

## Example (Pseudocode)

```
// Strategy Interface
interface SortingStrategy {
    sort(data): void
}

// Concrete Strategies
class BubbleSort implements SortingStrategy {
    sort(data): void {
        // Bubble sort algorithm
    }
}

class QuickSort implements SortingStrategy {
    sort(data): void {
        // Quick sort algorithm
    }
}

// Context
class DataSet {
    strategy: SortingStrategy

    setStrategy(strategy: SortingStrategy) {
        this.strategy = strategy
    }

    sortData(data) {
        this.strategy.sort(data)
    }
}

// Usage
dataSet = new DataSet()
dataSet.setStrategy(new QuickSort())
dataSet.sortData(myData)
```

## Summary

The Strategy pattern promotes the definition of a family of algorithms that are encapsulated in separate strategy classes. It improves flexibility and adherence to solid design principles, especially the Open/Closed Principle and Single Responsibility Principle.