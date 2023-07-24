<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "authent";

 // Database connection
 $conn = new mysqli($servername, $dbusername , $dbpassword, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

if (isset($_POST['signin'])) {
    // Collect form data
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    // Perform validation (e.g., check for empty fields)
    if ($username == "" || $pwd == "") { // empty fields checker: username and password are both empty or both non-empty.
        // Send back a message saying "username and password required". The "required" parameter is a php.ini setting.
        echo "username and password required";
        exit(); // terminate the script immediately.
    }

    



    // Check if user exists in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND pwd = '$pwd'";
    $result = $conn->query($sql); // Returns a result resource from a query.
    if ($result->num_rows > 0) { // If user exists, send them to the home page.
        // Set session variables upon successful sign in
        session_start();
        $_SESSION['username'] = $username;

        // Redirect to home page or any other page after successful sign in
        header("Location: ../index.php");
        exit();
    } else {
        echo "Invalid username or password";
    }

    $conn->close(); // Close connection to database.

}
