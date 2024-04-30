<?php 
// Variable Scope: The Playground of Your Variables

// In PHP, variable scope refers to the specific area of your code where a variable is visible and can be used. 
// It's like having designated play zones for your variables to avoid confusion and unintended modifications.
// Here are the three main types of scope in PHP: 

// 1. Local Scope: The Neighborhood for Function Variables
//Variables defined within a function have local scope. That means they can only be accessed within that function.
//Once the function finishes executing, the variable is destroyed, and you can't access it from outside the function.
// Variables declared within a function are local to that function. They're like kids playing in their own backyard (the function).
// They cannot be accessed directly from outside the function. It's their private playground.
// Example:

function greet($name) {
    $message = "Hello, $name!"; // Local variable
    echo $message;
}

greet("Alice"); // Output: Hello, Alice!
// $message is not accessible here because it's local to greet()
function myFunction() {
    $x = 5; // Local variable
    echo $x; // This will output 5
}

myFunction();
echo $x; // This will cause an error because $x is not defined outside the function

function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is:  $x</p>";
}
myTest();
// using x outside the function will generate an error
echo "<p>Variable x outside function is:  $x</p>";


// 2. Global Scope: The Big Park for Global Variables

//Variables defined outside of any function have global scope
// Variables declared outside any function are considered global. They're like a big park accessible to everyone in the code (all functions and scripts).
// Use global variables sparingly as they can lead to naming conflicts and make code harder to maintain. It's generally better to keep variables local if possible.
// Example:

$global_name = "World"; // Global variable
function sayHello() {
    global $global_name; // Accessing global variable
    echo "Hello, $global_name!";
}
sayHello(); // Output: Hello, World!


$y = 10; // Global variable
function myFunction() {
    global $y; // Using the global keyword to access the global variable inside the function
    echo $y; // This will output 10
}
myFunction();
echo $y; // This will also output 10


$x = 5; // global scope
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is:  $x</p>";
}
myTest();
echo "<p>Variable x outside function is:  $x</p>";

// 3. Static Scope: Remembering Values Across Function Calls

// Variables declared as static within a function keep their value between function calls. 
//They are initialized the first time a function is called and retain their value in subsequent calls.
// Static variables are declared within a function using the static keyword. They retain their values between function calls, unlike local variables which are reset each time.
// Think of them like a special box inside the function that holds onto a value even after the function finishes.
// Example:

function countCalls() {
    static $call_count = 0; // Static variable
    $call_count++;
    echo "Call number: $call_count";
}
countCalls(); // Output: Call number: 1
countCalls(); // Output: Call number: 2 (Remembers previous count)


function counter() {
    static $count = 0; // Static variable
    $count++;
    echo $count . "<br>";
}
counter(); // Outputs 1
counter(); // Outputs 2
counter(); // Outputs 3


function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}
myTest(); // output 0
myTest(); // output 1
myTest(); // output 2



