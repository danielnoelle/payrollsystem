<?php

session_start();

$genders = array("Male", "Female", "Non-binary", "Rather not say");

if (isset($_POST['fname']) && !empty($_POST['fname'])) {
    $_SESSION['fname'] = trim(htmlspecialchars($_POST['fname']));
} else {
    $_SESSION['fname'] = "";
}

if (isset($_POST['lname']) && !empty($_POST['lname'])) {
    $_SESSION['lname'] = trim(htmlspecialchars($_POST['lname']));
} else {
    $_SESSION['lname'] = "";
}

if (isset($_POST['gender']) && in_array($_POST['gender'], $genders)) {
    $_SESSION['gender'] = trim(htmlspecialchars($_POST['gender']));
} else {
    $_SESSION['gender'] = "";
}

if (isset($_POST['birthdate']) && !empty($_POST['birthdate'])) {
    $_SESSION["birthdate"] = trim(htmlspecialchars($_POST['birthdate']));
} else {
    $_SESSION["birthdate"] = "";
}

if (isset($_POST['contact']) && !empty($_POST['contact'])) {
    $_SESSION["contact"] = trim(htmlspecialchars($_POST['contact']));
} else {
    $_SESSION["contact"] = "";
}

$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$gender = $_SESSION['gender'];
$birthdate = $_SESSION['birthdate'];
$contact = $_SESSION['contact'];

$isValidated = !empty($fname) && !empty($lname) && !empty($gender) && !empty($birthdate) && !empty($contact);

if ($isValidated) {
    include_once("../views/signup3.php");
} else {
    include_once("../views/signup2.php");
}