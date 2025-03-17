# **Class 06 - Contact Form with CRUD using Bootstrap & PHP**

## **Project Overview**
In this class, we developed a **contact form** using **Bootstrap** with three input fields:  
- **Name**  
- **Email**  
- **Description**  

The form is validated on the server side using **PHP** and stores data in a **MySQL database** using CRUD operations.

---

## **Project Features**
✅ Bootstrap-powered responsive contact form.  
✅ Server-side validation using **PHP Sessions**.  
✅ Error messages for **name, email, and description**.  
✅ Secure form submission with input sanitization.  
✅ Data storage using **MySQL database**.  
✅ Navigation between **"Add New Post"** and **"All Posts"** pages.

---

## **Project Setup Instructions**
### **1️⃣ Install XAMPP and Start Apache & MySQL**
Ensure **Apache** and **MySQL** are running in **XAMPP**.

### **2️⃣ Create Database**
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Click **New**, name the database **crud_project**.
3. Run the following SQL query to create the **posts** table:

```sql
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    des TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## **Project File Structure**
```
/class06
│── /controllers
│   ├── post_validation.php
│── allPost.php
│── env.php
│── index.php
│── navbar.php
│── README.md
```

---

## **Code Explanation**
### **1️⃣ Database Connection - `env.php`**
This file establishes a connection with the MySQL database.

```php
<?php
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'crud_project';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
?>
```

---

### **2️⃣ Navbar - `navbar.php`**
The **Bootstrap navbar** for navigation between the **Add New Post** and **All Posts** pages.

```php
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link active" href="./index.php">Add New Post</a></li>
        <li class="nav-item"><a class="nav-link" href="./allPost.php">All Post</a></li>
      </ul>
    </div>
  </div>
</nav>
```

---

### **3️⃣ Contact Form - `index.php`**
- Displays the form with **name, email, and description** fields.
- Shows **error messages** using PHP **session variables**.
- Submits data to **`post_validation.php`** for processing.

```php
<?php
    include_once 'navbar.php';
    session_start();
?>

<div class="card col-md-6 mx-auto mt-2">
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success">
            <?= $_SESSION['success'] ?>
        </div>
    <?php } ?>

    <div class="card-header">Add New Post</div>

    <div class="card-body">
        <form action="./controllers/post_validation.php" method="POST">
           <label>Name</label><span class="text-danger">*</span>
           <input type="text" class="form-control mt-2" placeholder="Only letters and white space" name="name">
           <p class="text-danger"><?= $_SESSION['name_err'] ?? '' ?></p>

           <label>Email</label><span class="text-danger">*</span>
           <input type="text" class="form-control mt-2" placeholder="example@gmail.com" name="email">
           <p class="text-danger"><?= $_SESSION['email_err'] ?? '' ?></p>

           <label>Post Description</label><span class="text-danger">*</span>
           <textarea name="description" class="form-control mt-2"></textarea>
           <p class="text-danger"><?= $_SESSION['des_err'] ?? '' ?></p>

           <input type="submit" class="btn btn-primary w-100 my-2" value="Submit" name="submit_btn">
        </form>
    </div>
</div>

<?php session_unset(); ?>
```

---

### **4️⃣ Form Validation & Data Insertion - `post_validation.php`**
- **Validates** the form fields.
- **Sanitizes** user input.
- **Inserts data** into the database.

```php
<?php
    session_start();

    if(isset($_POST['submit_btn'])){
        // Collect user input
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $des = test_input($_POST['description']);

        // Name validation
        if(empty($name)){
            $_SESSION['name_err'] = "Name field can't be empty";
            header("Location:../index.php");
            exit();
        } elseif(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $_SESSION['name_err'] = "Only letters and white space allowed";
            header("Location:../index.php");
            exit();
        }

        // Email validation
        if(empty($email)){
            $_SESSION['email_err'] = "Email field can't be empty";
            header("Location:../index.php");
            exit();
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['email_err'] = "Invalid Email";
            header("Location:../index.php");
            exit();
        }

        // Description validation
        if(empty($des)){
            $_SESSION['des_err'] = "Description field can't be empty";
            header("Location:../index.php");
            exit();
        }

        // Insert data into database
        include '../env.php';
        $query = "INSERT INTO posts(name, email, des) VALUES ('$name','$email','$des')";
        $insert = mysqli_query($conn, $query);
        if($insert){
            $_SESSION['success'] = "Your data has been inserted successfully!";
            header("Location:../index.php");
        }
    }

    // Sanitize user input function
    function test_input($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
?>
```

---

### **5️⃣ Display All Posts - `allPost.php`**
Fetches all stored **posts** from the database and displays them.

```php
<?php
    include_once 'navbar.php';
    include 'env.php';

 
?>
```

---

## **Conclusion**
This project covers:
✅ **Bootstrap UI Design**  
✅ **PHP Form Handling**  
✅ **Session-Based Validation**  
✅ **Data Insertion & Display**  

## 👨‍💻 Instructor  
**Abdullah Al Sobail**  
*Software Engineer*  

🚀 Happy Coding!