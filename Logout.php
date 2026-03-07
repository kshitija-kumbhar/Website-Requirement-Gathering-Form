<?php
session_start();

session_unset();        // Removes session variables
session_destroy();      // Destroy sessions

// Redirect to login.html
header("Location: Login.html");
exit();     // Stops further code 
?>