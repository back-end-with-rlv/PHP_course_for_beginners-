<?php 
# Common data types in PHP for beginners:

# 1. String:  This is for storing text, like names, addresses, or any sequence of characters. You enclose strings in quotes (single or double).

# Example:
$name = "Alice";
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo $fullName; // Output: John Doe

# 2. Integer:  This is for whole numbers, positive, negative, or zero. You can't store decimals with integers.

#Example:
$age = 30;
$number1 = 10;
$number2 = 5;
$sum = $number1 + $number2; // Addition
$difference = $number1 - $number2; // Subtraction
$product = $number1 * $number2; // Multiplication
$quotient = $number1 / $number2; // Division
$remainder = $number1 % $number2; // Modulo (remainder)

# 3. Float:  This is for numbers with decimals, like prices or scientific data.

# Example:
$pi = 3.14159;
$price = 19.99;
$taxRate = 0.0825;
$total = $price * (1 + $taxRate); // Calculating total price including tax

# 4. Boolean:  This is for storing true or false values, often used for making decisions in your code.

# Example: 
$isStudent = true;

$isStudent = true;

if ($isStudent) {
    echo "You are a student.";
} else {
    echo "You are not a student.";
}

# 5 . Array: Imagine a container that can hold multiple ingredients of the same or different types. An array is a collection of items under a single variable name. Each item has an index (like a position number) that you use to access it.
# Example:
$fruits = array("apple", "banana", "orange");  // Array of strings
$ages = array(25, 30, 18);  // Array of integers
$mixedData = array("Alice", 3.14, true);  // Array with mixed data types

# 6. Object : Think of an object as a complete recipe with ingredients (data) and instructions (functions) all bundled together. Objects represent real-world things or concepts with properties (data) and methods (functions) that operate on that data.
# Example: (Creating a simple object is a bit more advanced, but here's a basic idea)

class Car {
  public $color;  // Property to store car color
  public function accelerate() {  // Method to simulate acceleration
    echo "The car is accelerating!...";
  }
}

$myCar = new Car();  // Create a new Car object
$myCar->color = "red";  // Set the color property
$myCar->accelerate();  // Call the accelerate method

# 7.  Resource: This data type represents an external resource being used by PHP, like a file handle, database connection, or image. You typically don't create resources directly, but use built-in functions to access them.
 # Example:
$fileHandle = fopen("myfile.txt", "r");  // Resource representing an open file

// Perform operations on the file using $fileHandle

fclose($fileHandle);  // Close the file resource

# 8.  Null: This data type indicates that a variable doesn't hold any value yet. It's like an empty container.
#Example: 
$name = null
