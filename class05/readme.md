Here’s **Class 05** following your provided topics and code structure:

---

# 📖 Class 05 - PHP Forms, Form Handling, Validation, $_SESSION, and $_SERVER  

## 📝 Topics Covered  
✔️ PHP Forms  
✔️ PHP Form Handling  
✔️ PHP Form Validation  
✔️ PHP Form Required  
✔️ PHP $_SESSION  
✔️ PHP $_SERVER  

---

## 📝 PHP Forms  
Forms allow users to submit data to the server, and PHP provides a way to retrieve and process that data. Here's a basic form to accept user input.

### **Example:**  
```php
<form action="formData.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control my-2">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control my-2">
    <button type="submit" name="submit_btn" class="btn btn-primary w-100">Submit</button>
</form>
```

---

## 📝 PHP Form Handling  
Handling forms in PHP involves processing the data once it is submitted. The form data is typically sent via `POST` or `GET` methods.

### **Example of Form Handling:**  
In the `index.php` file, you have a form that uses the POST method to send data to `formData.php` for processing.

---

## 📝 PHP Form Validation  
Form validation checks if the user input is correct before sending it to the server. You can validate fields like name, email, and other required inputs to ensure they are not empty.

### **Example:**
```php
if(isset($_POST['submit_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if(empty($name)){
        $_SESSION['name_err'] = "Name is required";
        header("Location:./index.php");
    } elseif(empty($email)){
        $_SESSION['email_err'] = "Email is required";
        header("Location:./index.php");
    } else {
        // Continue processing form data (e.g., insert into database)
    }
}
```

🔹 **Practice Exercise:**  
✅ Add form validation for:
- Ensuring the name is not empty.
- Ensuring the email is in a valid format.

---

## 📝 PHP Form Required  
Marking fields as required ensures that the user cannot submit the form without filling in the necessary information. You can add validation logic to check if the required fields are filled.

### **Example:**  
In `formData.php`, we use PHP to check if the form fields are empty and set error messages in session variables:
```php
if(empty($name)){
    $_SESSION['name_err'] = "Name is required";
    header("Location:./index.php");
}
```

---

## 📝 PHP $_SESSION  
The `$_SESSION` superglobal in PHP allows you to store data that can be accessed across different pages during the user's session. This is useful for holding form error messages, success messages, and user login states.

### **Example:**  
```php
<?php
session_start();
$_SESSION['success_insert'] = "Your data has been inserted!";
?>
```

🔹 **Practice Exercise:**  
✅ Use `$_SESSION` to store a success message when the user submits a valid form.

---

## 📝 PHP $_SERVER  
`$_SERVER` is a superglobal array in PHP that contains information about headers, paths, and script locations. This is useful for obtaining details about the environment the script is running in.

### **Example:**  
```php
<?php
echo $_SERVER['SERVER_NAME']; // Outputs the server name
echo $_SERVER['REQUEST_METHOD']; // Outputs the request method (GET, POST, etc.)
?>
```

🔹 **Practice Exercise:**  
✅ Use `$_SERVER` to print the current script name and the server's IP address.

---

## 🧮 Full Code Example:

### `index.php`
```php
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="card col-md-6 mx-auto">
        <?php
        if(isset($_SESSION['success_insert'])){
            echo '<div class="alert alert-success">'.$_SESSION['success_insert'].'</div>';
        }
        ?>

        <div class="card-header">Contact Form</div>
        <div class="card-body">
            <form action="formData.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control my-2">
                <span class="text-danger">
                    <?php
                    if(isset($_SESSION['name_err'])){
                        echo $_SESSION['name_err'];
                    }
                    ?>
                </span>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control my-2">
                <span class="text-danger">
                    <?php
                    if(isset($_SESSION['email_err'])){
                        echo $_SESSION['email_err'];
                    }
                    ?>
                </span>
                <button class="btn btn-primary my-2 w-100" name="submit_btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    session_unset();
?>
```

### `formData.php`
```php
<?php
session_start();

if(isset($_POST['submit_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if(empty($name)){
        $_SESSION['name_err'] = "Name is required";
        header("Location: ./index.php");
    } elseif(empty($email)){
        $_SESSION['email_err'] = "Email is required";
        header("Location: ./index.php");
    } else {
        include "./env.php";
        $query = "INSERT INTO users(name, email) VALUES ('$name', '$email')";
        mysqli_query($conn, $query);
        $_SESSION['success_insert'] = "Your data has been inserted";
        header("Location: ./index.php");
    }
}
?>
```

### `env.php`
```php
<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'test_form_data';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

---

## 🎯 **Final Challenge - Mini Project!**  
💡 **Task:** Create a **User Registration Form** using PHP.  

✅ Requirements:  
1️⃣ Include form validation for name and email.  
2️⃣ Store form data in a database.  
3️⃣ Use `$_SESSION` to show success or error messages.  
4️⃣ Use `$_SERVER` to display the current script name.

---

## 👨‍💻 Instructor  
**Abdullah Al Sobail**  
*Software Engineer*  

🚀 Happy Coding!