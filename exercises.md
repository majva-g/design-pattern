
# Adapter Pattern Practice Exercises

This document includes **10 backend** and **10 frontend** practical exercises where the Adapter Pattern can be applied. These examples help understand how to integrate legacy or incompatible systems into modern architectures using adapters.

---

## 🔧 Backend-Oriented Adapter Pattern Exercises

1. **Legacy Email Service Integration**  
   Adapt a legacy email-sending class with a method like `sendEmail($params)` to match a new `MailerInterface`.

2. **Database Migration Layer**  
   Create an adapter to make old MySQL queries (`mysql_query`) compatible with PDO or MySQLi-based interfaces.

3. **Old Payment Gateway Compatibility**  
   Use an adapter to convert an outdated payment API to work with a new `IPaymentProcessor`.

4. **Log System Wrapper**  
   Adapt a legacy logger that uses `writeLog($severity, $message)` to a standard PSR-3 style interface.

5. **Legacy User Authentication**  
   Wrap an old authentication system (`authUser($username, $pass)`) to match a modern OAuth-based `IAuthService`.

6. **Legacy Image Processor Integration**  
   Convert a procedural image processor (e.g., using `imagecreate()`) to an object-oriented image manipulation interface.

7. **SMS Notification System Adapter**  
   Adapt a third-party SMS system to work with your internal `NotificationService` interface.

8. **Filesystem Abstraction Adapter**  
   Convert PHP’s native `fopen`, `fread`, `fwrite` calls into a custom `IFileHandler` interface.

9. **Old API Client Adapter**  
   Wrap a SOAP-based web service client to work with your REST-based data access layer.

10. **Environment Configuration Adapter**  
    Adapt global config arrays (e.g., `$GLOBALS['config']`) to an interface like `IConfigProvider`.

---

## 🌐 Frontend-Oriented Adapter Pattern Exercises

1. **Third-party Chart Library Integration**  
   Adapt an external charting library (like Highcharts) to match your custom `ChartRenderer` interface.

2. **Old jQuery Plugin Adapter**  
   Wrap a jQuery-based plugin and expose it as a modern class or React hook.

3. **Form Validation Engine Adapter**  
   Convert a legacy form validator to work with your new `ValidatorInterface`.

4. **Adapter for Legacy Date Picker**  
   Wrap a non-standard date picker (like jQuery UI datepicker) into a Vue or React component.

5. **Media Player Adapter**  
   Adapt a video player’s API to work with a unified `IMediaPlayer` interface used across your app.

6. **Theme System Adapter**  
   Bridge between legacy CSS theme engine and modern CSS-in-JS theming API.

7. **Adapter for Different Storage APIs**  
   Adapt `localStorage` to match a custom `IStorage` interface (e.g., supporting async).

8. **Analytics Service Adapter**  
   Create an adapter to unify multiple analytics platforms (Google Analytics, Mixpanel) under a single interface.

9. **Keyboard Shortcut Manager Adapter**  
   Adapt third-party hotkey libraries to work with your app's custom input system.

10. **UI Component System Adapter**  
    Bridge an old custom UI library to work with your new design system (e.g., wrapping legacy dropdowns into React components).

---

## ✅ Tip
Each of these exercises challenges you to isolate incompatible systems, wrap them using an Adapter, and integrate them cleanly into a consistent architecture.

