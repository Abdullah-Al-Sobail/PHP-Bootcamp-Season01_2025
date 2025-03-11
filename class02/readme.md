# 📖 Class 02 - PHP Strings, Numbers & Operators  

## 📝 Topics Covered  
✔️ PHP Strings  
✔️ PHP Numbers  
✔️ PHP Casting  
✔️ PHP Math  
✔️ PHP Constants & Magic Constants  
✔️ PHP Operators  
✔️ PHP If...Else...Elseif  

---

## 📝 PHP Strings  
A **string** is a sequence of characters enclosed in `"double quotes"` or `'single quotes'`.  

💡 **Example:**  
```php
<?php
  $text = "Hello, PHP!";
  echo $text;
?>
```

### 🔥 String Functions  
```php
<?php
  $email = "      EXAMPLE@GMAIL.COM     ";

  echo strtoupper("hello");  // HELLO
  echo strtolower($email); // example@gmail.com
  echo strrev("world");     // dlrow
  echo str_replace("World", "PHP", "Hello World"); 
  echo strlen(trim($email)); // Removes spaces and counts length
?>
```

🔹 **Practice Exercise:**  
✅ Write a PHP program that:  
- Takes a user’s full name as input  
- Converts it to **uppercase**  
- Reverses the name  
- Replaces spaces with underscores  
- Outputs the transformed name  

---

## 🔢 PHP Numbers  
PHP supports **integers**, **floats**, and special values like `NaN`.  

💡 **Example:**  
```php
<?php
  $num1 = 5;       // Integer
  $num2 = 5.5;     // Float

  var_dump(is_int($num1));   // true
  var_dump(is_float($num2)); // true
?>
```

🔹 **Practice Exercise:**  
✅ Create a PHP script that checks whether a given number is **even or odd** using the modulus `%` operator.  

---

## 🔄 PHP Casting  
Casting converts variables from one type to another.  

💡 **Example:**  
```php
<?php
  $c = " 25 hello";  
  $c = (int) $c;  // 25 (extracts leading number)
?>
```

🔹 **Practice Exercise:**  
✅ Convert the following values to **integer**, **float**, **boolean**, and **string**, then print them:  
```
$x = "10.9";
$y = true;
$z = "Hello123";
```

---

## 🧮 PHP Math Functions  
💡 **Example:**  
```php
<?php
  echo round(50.90);    // 51
  echo rand(5, 10);     // Random number between 5 and 10
?>
```

🔹 **Practice Exercise:**  
✅ Write a PHP program that:  
- Generates a **random number** between 1 and 100  
- Checks if it's **greater than 50 or not**  
- Displays an appropriate message  

---

## 🎯 PHP Constants  
💡 **Example:**  
```php
<?php
  define("WELCOME_MESSAGE", "Welcome to PHP Bootcamp!");
  echo WELCOME_MESSAGE;
?>
```

🔹 **Practice Exercise:**  
✅ Create a constant `SITE_NAME` with your website name and display it on the page.  

---

## 🔮 PHP Magic Constants  
💡 **Example:**  
```php
<?php
  echo __DIR__;  // Directory of the script
?>
```

🔹 **Practice Exercise:**  
✅ Create a PHP script that displays the **file name and current line number** using magic constants.  

---

## 🔢 PHP Operators  

### ✅ Arithmetic Operators  
```php
<?php
  $x = 10;
  $y = 2;
  echo $x + $y;  // Addition
?>
```

🔹 **Practice Exercise:**  
✅ Create a calculator in PHP that takes **two numbers** and an **operator** (`+`, `-`, `*`, `/`) as input and returns the result.  

---

## ❓ PHP If...Else...Elseif  

💡 **Example:**  
```php
<?php
  $age = 21;
  echo $age > 18 ? "Adult" : "Not an adult";
?>
```

🔹 **Practice Exercise:**  
✅ Write a program that:  
- Takes the user's **age** as input  
- Checks if the user is a **child (0-12)**, **teenager (13-19)**, or **adult (20+)**  
- Outputs a message accordingly  

---
## 👨‍💻 Instructor  
**Abdullah Al Sobail**  
*Software Engineer*  

🚀 Happy Coding!  

