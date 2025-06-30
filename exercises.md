# 🧪 Proxy Pattern Exercises

This document includes 20 practice ideas using the Proxy Design Pattern:  
- 10 for **Backend Development**
- 10 for **Frontend Development**

---

## 🔙 Backend Practice Ideas

1. **User Role Validation Proxy**
   - Restrict access to sensitive API endpoints based on user roles.

2. **Rate Limiting Proxy**
   - Implement a proxy that limits the number of requests per user/IP.

3. **API Authentication Proxy**
   - Add a proxy that checks authentication before forwarding requests.

4. **Database Query Caching Proxy**
   - Cache specific SQL queries and return cached results when valid.

5. **Service Call Retry Proxy**
   - Add automatic retry mechanism in case of service failure.

6. **File Access Proxy**
   - Protect access to server files by checking file permissions.

7. **Payment Processor Proxy**
   - Add logging and fraud check before sending to payment gateway.

8. **Notification Sender Proxy**
   - Intercept and validate notifications (e.g., email, SMS) before sending.

9. **Geo IP Access Proxy**
   - Allow/deny access to a resource based on the user’s geolocation.

10. **Remote Procedure Proxy**
    - Use a proxy to call remote microservice functions with fallback behavior.

---

## 🎨 Frontend Practice Ideas

1. **Lazy Load Video Player Proxy**
   - Only load video player scripts when the user interacts with a video thumbnail.

2. **Component Render Proxy**
   - Prevent rendering of expensive React/Vue components unless user triggers it.

3. **Theme Switch Proxy**
   - Intercept and validate user preferences before switching themes.

4. **Drag-and-Drop Handler Proxy**
   - Wrap drag handlers to add logging or analytics for each interaction.

5. **Virtualized List Item Proxy**
   - Use a proxy to control rendering of large lists only for visible items.

6. **API Call Cache Proxy**
   - Store and reuse results of fetch/XHR calls for the same query.

7. **Client-Side Authorization Proxy**
   - Control access to specific routes/components in SPAs.

8. **Image Prefetch Proxy**
   - Intercept image loading and delay/prefetch based on network speed.

9. **Clipboard Action Proxy**
   - Add security and analytics when user copies content from UI.

10. **Debug Logging Proxy**
    - Wrap key event listeners with proxies that log interactions conditionally.

---

## ✅ Tip

When practicing, always start by defining a common interface or base behavior, then implement both the real service and the proxy layer with added logic.