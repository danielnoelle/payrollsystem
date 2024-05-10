<?php

session_start();

$gender = array("Male", "Female", "Non-binary", "Rather not say");

if (isset($_POST['fname']) && !empty($_POST['fname'])) {
    $_SESSION['fname'] = $_POST['fname'];
} else {
    $_SESSION['fname'] = "";
}

if (isset($_POST['lname']) && !empty($_POST['lname'])) {
    $_SESSION['lname'] = $_POST['lname'];
} else {
    $_SESSION['lname'] = "";
}

if (isset($_POST['gender']) && in_array($_POST['gender'], $gender)) {
    $_SESSION['gender'] = trim($_POST['gender']);
} else {
    $_SESSION['gender'] = "";
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $_SESSION["email"] = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
} else {
    $_SESSION["email"] = "";
}

$email = $_SESSION['email'];
$password = $_SESSION['password'];
$role = $_SESSION['role'];

$isValidated = !empty($email) && !empty($password) && !empty($role);

if ($isValidated) {
    include_once("../views/signup2.php");
} else {
    include_once("../views/signup.php");
}