
# Decorator Pattern Practice Exercises

This document includes 10 backend and 10 frontend exercises where you can apply the **Decorator Pattern** in a practical way. These are intended to help you understand and explore dynamic composition of behaviors.

---

## 🛠 Backend Exercises (e.g., C#, Java, PHP, Node.js)

1. **File Export System**
   - Base: Export to JSON
   - Decorators: Encrypt, Sign, Compress

2. **Payment Processing**
   - Base: Process payment
   - Decorators: Fraud check, Logging, Retry mechanism

3. **Email Sender**
   - Base: Send email
   - Decorators: Add footer, Log to DB, Validate recipients

4. **Command Handler Pipeline**
   - Base: Execute command
   - Decorators: Authorization, Logging, Validation

5. **Data Fetching Service**
   - Base: Get user from DB
   - Decorators: Cache layer, Retry on fail, Metrics

6. **Notification Sender**
   - Base: Send SMS
   - Decorators: Throttle, Retry, Audit log

7. **Authentication Flow**
   - Base: Token validator
   - Decorators: IP check, Rate limiter, Country blocklist

8. **Invoice Generator**
   - Base: Generate invoice PDF
   - Decorators: Add watermark, Add company info, Convert to ZIP

9. **Report Scheduler**
   - Base: Schedule report job
   - Decorators: Retry, Delay, Send Slack notification

10. **REST API Middleware Simulation**
    - Base: Request handler
    - Decorators: Authentication, Logging, Compression

---

## 🎨 Frontend Exercises (e.g., TypeScript, JavaScript, React, Vue)

1. **Input Validation Pipeline**
   - Base: Simple validator
   - Decorators: Required check, Email check, Regex pattern

2. **Dynamic Button Component**
   - Base: Simple button
   - Decorators: Tooltip, Ripple effect, Loading spinner

3. **API Response Processing**
   - Base: Fetch API
   - Decorators: Transform keys, Handle errors, Cache response

4. **Modal Dialog Manager**
   - Base: Open/close modal
   - Decorators: Center position, Add overlay, Animate entry

5. **Text Editor Toolbar Plugin**
   - Base: Editor core
   - Decorators: Bold, Italic, Underline formatting

6. **Form Submit Handler**
   - Base: Submit data
   - Decorators: Disable button, Show loading, Add delay

7. **Theming System**
   - Base: Render component
   - Decorators: Apply dark mode, Responsive tweaks, High-contrast

8. **Interactive Map Features**
   - Base: Display map
   - Decorators: Show markers, Draw routes, Display geofences

9. **Image Upload Pipeline**
   - Base: Upload image
   - Decorators: Resize, Watermark, Compress

10. **Keyboard Shortcut Handler**
    - Base: Listen for key press
    - Decorators: Context check, Prevent default, Trigger action

---

## 💡 Tips
- Try implementing 2–3 decorators for each exercise.
- Chain them in different orders and observe behavior.
- Refactor using interfaces and abstract classes to make decorators reusable.

---

Happy Coding! 🎉
