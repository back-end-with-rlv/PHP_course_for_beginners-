<?php

 // superglobal variables are like special VIP guests in your code. They're always available throughout your entire script, no matter where you are (functions, loops, different files). 
 // This makes them incredibly convenient for accessing information about the user, the server, and the environment your code is running in.

// * Imagine a Website with Superglobal Guests:

// * Think of your website as a bustling restaurant. Here's how superglobal variables come into play:

// * The Server (Host): This is like the head chef. Information stored in $_SERVER tells you details about the server software, domain name, and request method (like GET or POST).
// * The User (Customer): This is the person placing the order. Data in $_GET and $_POST captures what the user submitted through forms (GET for URL parameters, POST for form data).
// * The User's Preferences (Cookie Jar): Cookies stored in $_COOKIE hold information the user has saved, like login details or website preferences.
// * The Session (Table Reservation): Data in $_SESSION allows you to track user activity across multiple pages, like keeping their shopping cart items or logged-in status.
// * File Uploads (Delivery Box): Information about uploaded files is stored in $_FILES, making it easy to handle file uploads from forms.
// * Environment Variables (Secret Recipes): Sensitive information like database credentials or API keys can be stored in $_ENV for security reasons.

// * Here's a breakdown of some common superglobal variables:

// * $_SERVER: Contains server information like hostname, software version, and request details.
echo $_SERVER['HTTP_HOST'];  // Outputs: example.com
echo $_SERVER['REQUEST_URI']; // Outputs: /script.php

// * $_GET: Holds data submitted through URL parameters (e.g., ?name=Alice).
// URL: http://example.com/script.php?name=John&age=25
echo $_GET['name']; // Outputs: John
echo $_GET['age'];  // Outputs: 25

// * $_POST: Captures data submitted through HTML forms using the POST method.
// HTML form: <form method="post" action="script.php">
// form fields with names: name and email
echo $_POST['name'];  // If form submitted with name 'John', Outputs: John
echo $_POST['email']; // If form submitted with email 'john@example.com', Outputs: john@example.com

// * $_REQUEST: Combines both $_GET and $_POST data (use with caution).
//  Combines the contents of $_GET, $_POST, and $_COOKIE arrays. It's not recommended to use $_REQUEST due to security reasons, as it can be manipulated by the user.

// * $_COOKIE: Stores user preferences set by cookies.
// Cookie set: setcookie('username', 'John', time() + (86400 * 30), '/');
echo $_COOKIE['username']; // Outputs: John

// * $_SESSION: Tracks user activity across multiple pages by storing session data.
// Starting the session
session_start();
// Setting session variables
$_SESSION['username'] = 'John';
echo $_SESSION['username']; // Outputs: John

// * $_FILES: Provides information about uploaded files.
// HTML form: <form action="upload.php" method="post" enctype="multipart/form-data">
echo $_FILES['file']['name']; // Outputs the name of the uploaded file

// * $_ENV: Holds environment variables, often used for configuration settings.
// Assuming DATABASE_URL is set to something like "mysql://username:password@localhost/database_name"

// Retrieving the value of the DATABASE_URL environment variable
$database_url = $_ENV['DATABASE_URL'];

// Outputting the value
echo $database_url;



