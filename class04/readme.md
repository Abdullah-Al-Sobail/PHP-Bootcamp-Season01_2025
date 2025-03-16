# 📖 Class 04 - PHP Arrays, Superglobals, and Forms  

## 📝 Topics Covered  
✔️ Indexed Arrays  
✔️ Associative Arrays  
✔️ Multidimensional Arrays  
✔️ Array Methods  
✔️ foreach Loop  
✔️ PHP Superglobals  
✔️ PHP Forms (POST and GET)  

---

## 🧮 PHP Arrays  
Arrays in PHP are used to store multiple values in a single variable. There are different types of arrays, such as **indexed arrays**, **associative arrays**, and **multidimensional arrays**.

### **Indexed Arrays**  
An indexed array stores values with a numeric index.  
💡 **Example:**  
```php
<?php
$cars = ["Volvo", "Toyota", "BMW"];
echo $cars[1]; // Outputs: Toyota
?>
```

🔹 **Practice Exercise:**  
✅ Create an indexed array of 5 car names and loop through the array to display each one.

### **Associative Arrays**  
Associative arrays store values with named keys instead of numeric indices.  
💡 **Example:**  
```php
<?php
$person = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];
echo $person['name']; // Outputs: John
?>
```

🔹 **Practice Exercise:**  
✅ Create an associative array to store details of a student (e.g., name, age, grade). Print the student's age and grade using their keys.

### **Multidimensional Arrays**  
A multidimensional array is an array of arrays. It allows you to store more complex data.  
💡 **Example:**  
```php
<?php
$students = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Jane', 'age' => 22]
];
echo $students[0]['name']; // Outputs: John
?>
```

🔹 **Practice Exercise:**  
✅ Create a multidimensional array for a class of students where each student has their name, age, and subjects. Display the name of the second student and their age.

### **Array Methods**  
PHP offers several built-in methods for manipulating arrays, such as `array_push()`, `array_pop()`, `array_shift()`, and more.  
💡 **Example:**  
```php
<?php
$cars = ["Volvo", "BMW", "Toyota"];
array_push($cars, "Ford");
print_r($cars);
?>
```

🔹 **Practice Exercise:**  
✅ Use the `array_pop()` method to remove the last element from an array and display the modified array.

---

## 🔁 foreach Loop  
The `foreach` loop is used to iterate over arrays. It simplifies working with arrays compared to traditional loops.

💡 **Example:**  
```php
<?php
$cars = ["Volvo", "BMW", "Toyota"];
foreach ($cars as $car) {
    echo $car . "<br>";
}
?>
```

🔹 **Practice Exercise:**  
✅ Write a PHP program that uses a `foreach` loop to display each item of an associative array, showing both keys and values.

---

## 🌍 PHP Superglobals  
PHP has several built-in variables known as superglobals. They are accessible from anywhere in the script.

### **$GLOBALS**  
The `$GLOBALS` array allows access to variables from anywhere in the global scope.  
💡 **Example:**  
```php
<?php
$x = 5;
function test() {
    echo $GLOBALS['x']; // Outputs: 5
}
test();
?>
```

### **$_POST and $_GET**  
`$_POST` and `$_GET` are used to collect form data.  
- `$_POST` is used when a form is submitted via the `POST` method.
- `$_GET` is used when a form is submitted via the `GET` method.

💡 **Example:**
```php
<?php
// Form data received via POST method
$name = $_POST['name'];
$email = $_POST['email'];
echo "Name: $name, Email: $email";
?>
```

🔹 **Practice Exercise:**  
✅ Create a form that collects the user’s name and email and displays them using `$_POST`.

---

## 📝 PHP Forms  
Forms are essential for interacting with users. This class covers how to create forms that use the `POST` method for secure data submission.

💡 **Example:**
```html
<form action="formdata.php" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control">
    <input type="submit" value="Submit" class="btn btn-primary mt-2 w-100">
</form>
```

🔹 **Practice Exercise:**  
✅ Create a form that accepts a user’s first and last name, sends the data using `POST`, and displays the full name on the next page.

---

## 🎯 **Final Challenge - Mini Project!**  
💡 **Task:** Create a **Student Information Form** using PHP.  

✅ Requirements:  
1️⃣ The form should collect a student's name, age, and courses (multiple selections possible).  
2️⃣ Use the `$_POST` superglobal to process the form data.  
3️⃣ Display the submitted data on a new page.

---

## 👨‍💻 Instructor  
**Abdullah Al Sobail**  
*Software Engineer*  

🚀 Happy Coding!