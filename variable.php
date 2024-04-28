<?php 

<!-- Naming:  Variable names in PHP always start with a dollar sign ($) followed by the name you choose. The name should be descriptive and follow these rules:

Can start with a letter (a-z) or underscore (_).
Can only contain letters, numbers, and underscores.
Are case-sensitive (so $age and $AGE are different variables).
Declaring:  PHP doesn't require a separate declaration step for variables. You simply assign a value to a name, and PHP automatically creates the variable for you.
Storage Container: Think of a variable like a labeled box in which you can put different types of information. Each box (variable) has a name (identifier) that you use to refer to its contents.
Data Holder: Variables can hold various types of data such as numbers, text, arrays, or objects. For example, you can have a variable named $age storing a person's age, or $name storing their name.
Dynamic Nature: One of the flexible aspects of PHP variables is that you don't need to declare their type explicitly. PHP dynamically determines the data type based on the value assigned to the variable.
Symbolic Representation: In PHP, variables are represented by a dollar sign ($) followed by the variable name. For instance, $username, $count, $price, etc.
-->
# Assigning and Displaying Text:
$name = "Alice";
echo "Hello, $name!"; // Output: Hello, Alice!

# Assigning and Displaying Numbers:
$age = 25;
echo "She is $age years old."; // Output: She is 25 years old.

# Mathematical Operations with Variables:
$num1 = 10;
$num2 = 5;
$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is $sum."; // Output: The sum of 10 and 5 is 15.

# Concatenation of Variables:
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo "Full Name: $fullName"; // Output: Full Name: John Doe

# Variable Reassignment:
$num = 10;
echo "Original Number: $num"; // Output: Original Number: 10
$num = 20;
echo "Updated Number: $num"; // Output: Updated Number: 20

