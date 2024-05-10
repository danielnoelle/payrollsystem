<?php

session_start();

$roles = array(1, 2);

$_SESSION["password"] = trim($_POST["password"]);

if (isset($_POST['role']) && in_array($_POST['role'], $roles)) {
    $_SESSION['role'] = trim(html);
} else {
    $_SESSION['role'] = "";
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