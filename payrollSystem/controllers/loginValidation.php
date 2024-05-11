<?php

session_start();

$email = "johndoe@gmail.com";
$password = "johndoe123";

$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

if ($_SESSION['email'] === $email && $_SESSION['password'] === $password) {
    header('Location: ../views/overview.php');
} else {
    header('Location: ../views/login.php');
}