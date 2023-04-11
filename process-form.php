<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  die('Invalid request method');
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

echo "Name: $firstname $lastname <br>";
echo "Email: $email <br>";

$password_length = strlen($password);
echo "Password length: $password_length <br>";

if ($password !== $confirm_password) {
  die('Passwords do not match');
}
