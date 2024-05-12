<?php

session_start();

require('../models/database.php');

$fields = ['hoursWorked', 'daysWorked', 'hourlyRate', 'tax', 'bonus', 'benefits', 'salary', 'netSalary'];
foreach ($fields as $field) {
    if (isset($_POST[$field]) && filter_var(trim(htmlspecialchars($_POST[$field])), FILTER_VALIDATE_FLOAT)) {
        $_SESSION[$field] = trim(htmlspecialchars(filter_var($_POST[$field], FILTER_SANITIZE_NUMBER_FLOAT)));
    } else {
        $_SESSION[$field] = "";
    }
}

$hoursWorked = $_SESSION['hoursWorked'];
$daysWorked = $_SESSION['daysWorked'];
$hourlyRate = $_SESSION['hourlyRate'];
$tax = $_SESSION['tax'];
$bonus = $_SESSION['bonus'];
$benefits = $_SESSION['benefits'];
$salary = $_SESSION['salary'];
$netSalary = $_SESSION['netSalary'];

$isNotEmpty = !empty($hoursWorked) && !empty($daysWorked) && !empty($hourlyRate) && !empty($tax) && !empty($bonus) && !empty($benefits) && !empty($salary) && !empty($netSalary);

if ($isNotEmpty) {

    $database = new Database();

} else {
    $_SESSION['errorMessage'] = "There are errors in the form you submitted. Please try again";
    include_once('../dialogs/loginError.php');
}

