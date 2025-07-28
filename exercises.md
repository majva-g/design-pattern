# Bridge Pattern – Practical Exercises

This document contains **20 practice ideas** to help you master the Bridge Pattern.
- 🔧 10 backend-oriented exercises
- 🎨 10 frontend-oriented exercises
- All exercises are designed to involve **two orthogonal dimensions** (Abstraction & Implementation) to practice true Bridge structure.

---

## 🔧 Backend Exercises

1. **Payment System**  
   - Abstraction: Payment types (direct, subscription, refund)  
   - Implementation: Payment gateways (Stripe, PayPal, Square)

2. **Report Exporter**  
   - Abstraction: Report types (user report, inventory report)  
   - Implementation: Formats (CSV, XLSX, XML)

3. **Message Sender**  
   - Abstraction: Message types (alert, info, transaction)  
   - Implementation: Channels (email, Slack, webhook)

4. **Document Generator**  
   - Abstraction: Document types (invoice, contract, receipt)  
   - Implementation: Templates (Markdown, HTML, LaTeX)

5. **Logging System**  
   - Abstraction: Log levels (info, debug, error)  
   - Implementation: Output sinks (file, database, syslog)

6. **Image Processor**  
   - Abstraction: Processing types (resize, compress, watermark)  
   - Implementation: Libraries (Imagick, GD, Cloudinary)

7. **File Storage Service**  
   - Abstraction: Storage operations (upload, delete, get URL)  
   - Implementation: Providers (AWS S3, Google Cloud Storage, local FS)

8. **Translation System**  
   - Abstraction: Modules (UI strings, email templates, error messages)  
   - Implementation: Services (Google Translate, DeepL, internal glossary)

9. **Authentication System**  
   - Abstraction: Auth flow (login, registration, password reset)  
   - Implementation: Identity providers (local DB, OAuth, LDAP)

10. **Task Scheduler**  
    - Abstraction: Task types (emailing, report generation, backups)  
    - Implementation: Schedulers (cron, RabbitMQ, Amazon EventBridge)

---

## 🎨 Frontend Exercises

1. **UI Theming Engine**  
   - Abstraction: Components (button, input, modal)  
   - Implementation: Themes (light, dark, high-contrast)

2. **Chart Renderer**  
   - Abstraction: Data types (sales, traffic, stock price)  
   - Implementation: Renderers (Chart.js, D3.js, Google Charts)

3. **Animation Engine**  
   - Abstraction: Animation type (slide, fade, bounce)  
   - Implementation: Libraries (GSAP, CSS, Framer Motion)

4. **Notification System**  
   - Abstraction: Notification types (info, warning, success)  
   - Implementation: Delivery (toast, modal, system tray)

5. **Form Validator**  
   - Abstraction: Validation rules (required, minLength, custom regex)  
   - Implementation: Frameworks (custom, Yup, Vuelidate)

6. **Media Player**  
   - Abstraction: Content types (audio, video, stream)  
   - Implementation: Player engines (HTML5, Plyr.js, Video.js)

7. **Responsive Layout Engine**  
   - Abstraction: Layout logic (grid, flex, stacked)  
   - Implementation: Viewports (mobile, tablet, desktop)

8. **Drag & Drop UI**  
   - Abstraction: Item types (task card, image, block)  
   - Implementation: Libraries (SortableJS, React DnD, native HTML5)

9. **Tooltip Manager**  
   - Abstraction: Content types (info, warning, contextual)  
   - Implementation: Tooltips (Popover, native title, custom balloon)

10. **Text Editor Plugin System**  
    - Abstraction: Plugin types (syntax highlighter, auto-complete)  
    - Implementation: Editors (Monaco, CodeMirror, Ace)

---

## ✅ Tip

For each exercise:
- Define the Abstraction and Implementation interfaces
- Make them composable via constructor injection
- Try swapping implementations without touching the abstractions

Happy coding! 🚀