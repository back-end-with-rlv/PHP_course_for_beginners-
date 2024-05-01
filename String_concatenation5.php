<?php 

// Concatenation in PHP refers to joining multiple strings together to create a new string.
// You can achieve this using the dot (.) operator with the echo statement, which is a common way to output data in PHP.

// Here's how string concatenation with echo works:
// 1. Variables and Strings:

// You can concatenate variables containing strings and literal strings (text enclosed in quotes).

// 2. The Dot (.) Operator:

// The dot (.) operator is used to combine these strings.
// It acts like a glue, attaching the elements on its right and left side.
// 3. echo Statement:

// The echo statement is used to output the concatenated string to the web page.

// Example :

$name = "Alice";
$greeting = "Hello, ";

echo $greeting . $name . "!";  // Output: Hello, Alice!

// Explanation:

// We define two variables: $name with the value "Alice" and $greeting with the value "Hello, ".
// The echo statement uses the dot (.) operator to concatenate the $greeting variable, the literal string "Alice", and the exclamation mark.
// The resulting string "Hello, Alice!" is then displayed on the web page.
// Additional Notes:

// You can concatenate multiple strings and variables in a single echo statement.
// You can also use double quotes (") to embed variables directly within the string. For example:

echo "My name is $name.";  // Output: My name is Alice.

// Define variables
$name = "John";
$age = 30;

// Concatenate strings and output with echo
echo "My name is " . $name . " and I am " . $age . " years old.";
?>



