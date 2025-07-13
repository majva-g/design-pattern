
# 🧩 Composite Pattern – 20 Practice Exercises

This file includes **10 backend** and **10 frontend** use-case ideas and exercises to practice implementing the **Composite Design Pattern**.

---

## 🔙 Backend Exercises

1. **Notification System**
   - Create a notification manager that can handle individual messages (emails, SMS) and grouped notifications (email campaigns, multi-channel alerts).

2. **Permission Hierarchy**
   - Build a role-based access control (RBAC) system where roles can inherit permissions from other roles recursively.

3. **Math Expression Evaluator**
   - Design a parser that evaluates expressions like `(2 + 3) * (5 - 1)` using Composite nodes for operators and values.

4. **API Endpoint Grouping**
   - Create a structure where endpoints can be grouped hierarchically and processed recursively (e.g., for versioning or rate limiting).

5. **Query Builder**
   - Build a query DSL where filters (e.g., `AND`, `OR`, `NOT`) are composable objects forming an expression tree.

6. **Event Handler System**
   - Develop an event system where individual handlers or groups of handlers can be registered for specific events.

7. **Workflow Engine**
   - Model workflows where each task can be atomic or composed of other tasks.

8. **Custom Logger**
   - Implement a logger that can write to multiple outputs (file, DB, external service), with output destinations grouped as a composite.

9. **Validation Pipeline**
   - Create a validation system where simple validators (e.g., "is required", "is email") can be combined into nested structures.

10. **Filesystem Indexing**
    - Design a virtual file explorer for a cloud service where files and folders are managed uniformly.

---

## 🎨 Frontend Exercises

1. **Dynamic Form Builder**
   - Create a system where forms consist of simple fields (input, checkbox) and grouped sections.

2. **Document Editor**
   - Model a document composed of text blocks, images, and grouped sections (headers, footers).

3. **Dashboard Widgets**
   - Design dashboard components where widgets can be single or grouped (e.g., KPI + Chart).

4. **Drag-and-Drop Layout Editor**
   - Allow users to compose pages from blocks and nested block groups.

5. **Tree View UI Component**
   - Build a collapsible tree view for file navigation or category selection.

6. **Multi-level Tabs**
   - Create a tab component where each tab can contain other tabs.

7. **Animation Sequences**
   - Model animation chains where animations can be grouped and applied sequentially or in parallel.

8. **Responsive Grid System**
   - Design a grid layout where cells can be atomic or contain nested grids.

9. **Graph Visualizer**
   - Build a UI to visualize connected components (nodes and clusters of nodes).

10. **HTML Renderer**
    - Implement an HTML rendering engine that builds a tree of elements and renders them recursively.

---

## ✅ Tip

Try implementing these exercises in different languages or frameworks to deepen your understanding. Combine Composite with other patterns like Visitor, Iterator, or Decorator for more realistic scenarios.
