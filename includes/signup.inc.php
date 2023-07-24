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

// PHP code for sign up
if (isset($_POST['signup'])) {
    // Collect form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $repeatpwd = $_POST['repeatpwd']; // Confirm password field is same as password field.
    

    // Perform validation (e.g., check for empty fields, password strength, etc.)
    // ...

   

    // Store user data in the database
    $sql = "INSERT INTO users (username, email, pwd ) VALUES ('$username', '$email', '$pwd')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to sign-in page after successful sign up
        header("Location: ../login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}