<?php
// Replace with your actual username and password
$validUsername = "Doloryen";
$validPassword = "316541";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    if ($enteredUsername == $validUsername && $enteredPassword == $validPassword) {
        // Successful login
        header("Location: welcome.html"); // Redirect to a welcome page
    } else {
        // Invalid login
        echo "Invalid username or password. Please try again.";
    }
}
?>
