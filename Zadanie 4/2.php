<?php
$usernameToCheck = "admin";
$passwordToCheck = "test";
$sql = "SELECT password FROM users WHERE username = ?";
$hashedPasswordFromDatabase = "test1";
if (password_verify($passwordToCheck, $hashedPasswordFromDatabase)) {
    echo "Poprawne logowanie!";
} else {
    echo "Błędne hasło.";
}
?>