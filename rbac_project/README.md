# **📌 Project Specification Document: Role-Based Access Control (RBAC) System**

## **1. Project Overview**

### **1.1 Project Title**

**Role-Based Access Control (RBAC) System**

### **1.2 Project Description**

A secure user management system where users can register, choose a role (Editor, Contributor, or User), and wait for admin approval before accessing the system. Admins can manage users, change roles, and approve/reject accounts. The system provides role-based dashboards, ensuring that users only see features permitted for their role.

### **1.3 Objective**

* Implement **secure user authentication** using PHP and MySQL.
* Restrict access based on **user roles and permissions**.
* Enable **admin control over user approvals and role assignments**.
* Provide a **notification system** for registration and approval updates.

### **1.4 Technologies Used**

#### **Backend:**

* **PHP** (Laravel or Core PHP) – Server-side scripting
* **MySQL** – Database management
* **bcrypt** – Secure password hashing
* **Session & Cookies** – Authentication management

#### **Frontend:**

* **HTML, CSS, Bootstrap** – UI design
* **JavaScript (Minimal)** – UI enhancements

#### **Tools & Deployment:**

* **Apache/Nginx** – Web server
* **phpMyAdmin** – Database management
* **GitHub/GitLab** – Version control
* **cPanel / VPS** – Hosting environment

---

## **2. Functional Requirements**

### **2.1 User Roles & Access Control**

| Role                 | Access Level                                             |
| -------------------- | -------------------------------------------------------- |
| **Admin**            | Full control over users, roles, and content              |
| **Editor**           | Can edit users and manage blog posts                     |
| **Contributor**      | Can add and edit blog posts                              |
| **User**             | Can only add blog posts                                  |
| **Unapproved Users** | Can log in but only see "Admin Approval Required" banner |

---

### **2.2 Core Features**

#### **A. User Management**

✅ **User Registration** – Users can sign up and choose their role.  
✅ **Login & Authentication** – Users can log in using secure password verification.  
✅ **Session Management** – Users stay logged in securely until they log out.  
✅ **Admin Approval System** – Unapproved users see a **"Waiting for Admin Approval"** notice.  
✅ **User Role Management** – Admins can assign/change roles anytime.  
✅ **Account Rejection Handling** – Rejected users cannot log in.  

#### **B. Admin Panel Features**

✅ **View & Approve New Users** – Admins see pending accounts and approve/reject them.  
✅ **Manage User Roles** – Change user roles anytime.   
✅ **Manage Users** – Add, edit, or delete users.  
✅ **Manage Blog Posts** – Add, edit, or delete posts.  
✅ **Receive Notifications** – Get alerts when a new user registers.

#### **C. Role-Based Dashboards**

* **Admin Dashboard** → Full access to all features.
* **Editor Dashboard** → Manage users & blog posts.
* **Contributor Dashboard** → Manage blog posts only.
* **User Dashboard** → Can only add blog posts.
* **Pending Approval Dashboard** → Shows **"Admin Approval Required"** notice.

#### **D. Security & Access Control**

✅ **Password Hashing** – All passwords are encrypted with **bcrypt**.  
✅ **Session-Based Authentication** – Only authenticated users can access their dashboard.  
✅ **Unauthorized Access Prevention** – Users cannot access features beyond their role.  
✅ **SQL Injection & XSS Protection** – Proper input validation and escaping applied.

#### **E. Notifications System(Optional)**

✅ **Admin Notification** – Alerts when a new user registers.  
✅ **User Notification** – Email & on-site alert when approved/rejected.   

📌 **Example Email Notification:(Optional)**

```php
mail($user_email, "Account Approved", "Your account has been approved by Admin.");
```

---

## **3. Database Design**

### **3.1 Database Schema**

| Table Name         | Purpose                                  |
| ------------------ | ---------------------------------------- |
| `users`            | Stores user details and role assignments |
| `roles`            | Defines different user roles             |
| `permissions`      | Stores system-wide permissions           |
| `role_permissions` | Links roles to permissions               |
| `notifications`    | Stores system notifications              |

📌 **Example User Table Structure:**

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin', 'editor', 'contributor', 'user', 'pending') DEFAULT 'pending',
    status ENUM('approved', 'rejected', 'pending') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## **4. System Workflow**

### **4.1 User Registration & Approval Flow**

1️⃣ **User registers and selects a role.**  
2️⃣ **User cannot log in until admin approves.**  
3️⃣ **Admin reviews and either approves or rejects the request.**  
4️⃣ **If approved:** User logs in and sees their dashboard.  
5️⃣ **If rejected:** User cannot log in.

📌 **Example PHP Role Check for User Access:**

```php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] === 'pending') {
    header("Location: approval_pending.php");
    exit;
}
```

---

## **5. Deployment & Maintenance(Optional)**

### **5.1 Deployment Process**

* Set up **Apache/Nginx** on a server.
* Configure **MySQL database**.
* Upload project files using **cPanel or FTP**.
* Set up **domain and SSL** for security.

### **5.2 Maintenance & Updates**

* **Security updates** (e.g., PHP version, database security).
* **Performance monitoring** (check server logs).
* **Bug fixes & feature enhancements**.

---

## **6. Bonus Challenge (For Advanced Students)(Optional)**

🔥 **Implement AJAX for Improved UX**  
✅ **Admin can approve users instantly without reloading the page.**  
✅ **Users receive instant approval notifications using AJAX.**  
✅ **Dynamically update role-based dashboards without refreshing.**  

📌 **Example AJAX Code for Approving Users (Bonus Only):**

```javascript
$(document).on('click', '.approve-user', function() {
    let userId = $(this).data('id');
    $.post('approve_user.php', { id: userId }, function(response) {
        alert('User Approved!');
        location.reload();
    });
});
```

---

## **7. Expected Outcome**

✅ A **fully functional RBAC system** with secure authentication.  
✅ Users can **register, log in, and access features based on roles**.  
✅ Admin has **full control** over users, roles, and content.  
✅ **Secure authentication, notifications, and dynamic access control(Optional)**. 

---

### **💡 Additional Student Tasks(Optional)**

🔹 Implement **search & filter** functionality for user management.  
🔹 Add **AJAX-based role updates** (for those who want to learn AJAX).  
🔹 Implement **REST API authentication** using JWT tokens.

---

## ✅ Professional & Scalable RBAC Project Structure

### *Here’s a standard file and folder structure demo for an RBAC (Role-Based Access Control):*

```
rbac_project/
│
├── config/
│   └── db.php                    # Database connection setup
│
├── controllers/
│   ├── AuthController.php        # Handles login, register, logout
│   ├── UserController.php        # Admin: manage users
│   └── BlogController.php        # Blog operations
│
├── middleware/
│   └── auth.php                  # Access control, session checks, role verification
│
├── views/
│   ├── layout/
│   │   ├── header.php
│   │   ├── footer.php
│   │   └── navbar.php
│   ├── auth/
│   │   ├── login.php
│   │   └── register.php
│   ├── dashboard/
│   │   ├── admin.php
│   │   ├── editor.php
│   │   ├── contributor.php
│   │   └── user.php
│   └── partials/
│       └── approval_notice.php   # "Admin approval required" message
│
├── public/
│   ├── index.php                 # Default home or redirect to dashboard
│   ├── dashboard.php             # Loads role-based dashboard view
│   ├── login.php
│   ├── register.php
│   ├── logout.php
│   └── not_approved.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── scripts.js
│
├── uploads/                      # User files
│
├── notifications/
│   ├── send_registration_alert.php   # Alert admin of new user
│   └── send_approval_notice.php      # Alert user when approved
│
├── .env                          # Environment variables (db credentials etc.)
├── .htaccess                     # Security rules and routing
├── README.md                     # Project documentation
└── composer.json                 # For dependency management (optional)
```

---

## 💡File/Folder Purpose

| Folder/File             | Purpose                                                          |
| ----------------------- | ---------------------------------------------------------------- |
| `controllers/`          | All backend logic and routing for forms, users, blogs            |
| `middleware/auth.php`   | Reusable access control code (e.g., `isAdmin()`, `isApproved()`) |
| `views/dashboard/*.php` | View files for each role, loaded dynamically                     |
| `dashboard.php`         | A single entry point to include the correct dashboard view       |
| `notifications/`        | Optional alert system for admin and users                        |
| `uploads/`              | For any files users submit (if applicable)                       |
| `.env`                  | DB config and secure settings (optional but recommended)         |

---


### 🚀 How to Use This Folder Structure

1. **Clone the Repository:**

```bash
git clone https://github.com/Abdullah-Al-Sobail/rbac_project.git
```

2. **Navigate to the Project Folder:**

```bash
cd rbac_project
```

---

### Technologies:

* **PHP (Core Language)**
* **MySQL** for database
* **HTML/CSS/JS** for frontend
* **Bootstrap** (optional, for styling)
* **PHP Sessions** for login management
* **Email Notification (PHPMailer or native `mail()` function)**
* **bcrypt** for password hashing
* **AJAX** *(optional, as a bonus)*





