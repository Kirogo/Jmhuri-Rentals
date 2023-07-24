<?php
// Start the session
session_start();

// Unset and destroy the session variables
session_unset();
session_destroy();

// Redirect to the sign-in page or any other page
header("Location: ../index.php");
exit();
?>
