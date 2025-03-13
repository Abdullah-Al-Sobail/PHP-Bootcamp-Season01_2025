
# 📖 Class 03 - PHP Elseif, Switch, Loops, Functions, and Arrays  

## 📝 Topics Covered  
✔️ PHP Elseif  
✔️ PHP Switch  
✔️ PHP Loops  
✔️ PHP Functions  
✔️ PHP Arrays (Indexed Arrays)  

---

## 📝 PHP Elseif  
The `elseif` statement in PHP allows multiple conditions to be checked after an initial `if` condition. It’s perfect for handling multiple possible outcomes.

💡 **Example:**  
```php
<?php
$age = 18;

if ($age > 18) {
    echo "You are eligible";
} elseif ($age == 18) {
    echo "You are 18";
} elseif ($age <= 0) {
    echo "Invalid Input";
} else {
    echo "You are under 18";
}
?>
```

🔹 **Practice Exercise:**  
✅ Write a PHP program that checks a person's age and outputs one of the following messages:
- "You are eligible" if the age is greater than 18
- "You are 18" if the age is exactly 18
- "You are under 18" if the age is less than 18
- "Invalid Input" if the age is zero or negative

---

## 🔀 PHP Switch  
The `switch` statement evaluates an expression and compares its result to the values defined in the `case` statements.

💡 **Example:**  
```php
<?php
$color_name = "pink";

switch ($color_name) {
    case "red":
    case "pink":
        echo "Your favourite color is $color_name";
        break;
    case "green":
        echo "Your favourite color is green";
        break;
    case "blue":
        echo "Your favourite color is blue";
        break;
    case "yellow":
        echo "Your favourite color is yellow";
        break;
    default:
        echo "Invalid color";
}
?>
```

🔹 **Practice Exercise:**  
✅ Write a PHP program that:
- Takes the user's favorite color as input
- Uses a `switch` statement to display a message based on the user's choice, such as "Your favorite color is blue" or "Invalid color" if the color is not recognized.

---

## 🔁 PHP Loops  
Loops in PHP allow you to repeat a block of code multiple times. Here are the different types:

### **While Loop**  
A `while` loop runs as long as the given condition is true.

💡 **Example:**  
```php
<?php
$num = 1;

while ($num < 10) {
    echo "The number is : $num<br>";
    $num++;
}
?>
```

### **For Loop**  
A `for` loop runs a block of code a set number of times.

💡 **Example:**  
```php
<?php
for ($num = 1; $num < 5; $num++) {
    echo "The number is : $num<br>";
}
?>
```

### **Do-While Loop**  
A `do-while` loop guarantees that the block of code will run at least once, even if the condition is false.

💡 **Example:**  
```php
<?php
$num = 1;

do {
    echo "The number is : $num<br>";
    $num++;
} while ($num < 5);
?>
```

🔹 **Practice Exercise:**  
✅ Write a PHP program that:
- Uses a `while` loop to print numbers from 1 to 10
- Uses a `for` loop to print numbers from 1 to 5
- Uses a `do-while` loop to print numbers starting from 1, but stops after 3

---

## 🛠 PHP Functions  
A function in PHP is a block of code that performs a specific task. It can be called by its name anywhere in the script.

### **Example of a Simple Function**  
```php
<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

echo add(10, 20);  // Outputs: 30
?>
```

### **Function with Callback**  
PHP allows passing a function as an argument to another function.

💡 **Example:**  
```php
<?php
function greet($callback, $name) {
    echo $callback($name);
}

function myFun($name) {
    return "Hello, " . $name;
}

greet('myFun', "PHP");
?>
```

🔹 **Practice Exercise:**  
✅ Write a PHP function that:
- Takes two numbers as input
- Returns the **sum** of the numbers
- Call this function and display the result

---

## 🧮 PHP Arrays (Indexed Arrays)  
Arrays in PHP are used to store multiple values in a single variable. An **indexed array** stores values with a numeric index.

💡 **Example:**  
```php
<?php
$myArry = ["Item01", 5, 10.2, true];
print_r($myArry[2]);  // Outputs: 10.2
?>
```

🔹 **Practice Exercise:**  
✅ Create an array with at least 5 items of different types (string, number, boolean).  
- Print the 3rd item of the array
- Loop through the array and display each item

---

## 🎯 **Final Challenge - Mini Project!**  
💡 **Task:** Create a **Color Selector** using PHP.  

✅ Requirements:  
1️⃣ Use a `switch` statement to display messages for different color selections (`red`, `green`, `blue`, etc.)  
2️⃣ Create a function that prints a greeting message using a **callback** function  
3️⃣ Use a **loop** to display a list of colors and let the user select one to get a message  



## 👨‍💻 Instructor  
**Abdullah Al Sobail**  
*Software Engineer*  

🚀 Happy Coding!  


