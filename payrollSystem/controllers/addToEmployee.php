<?php

session_start();

require('../models/database.php');
require_once('../controllers/calculateSalary.php');

function validateDate($date, $format = 'Y-m-d')
{
    return date($format, strtotime($date)) === $date;
}

$fields = ['hoursWorked', 'daysWorked', 'hourlyRate', 'tax', 'bonus', 'benefits', 'salary', 'netSalary'];
foreach ($fields as $field) {
    if (isset($_POST[$field]) && filter_var(trim(htmlspecialchars($_POST[$field])), FILTER_VALIDATE_FLOAT)) {
        $_SESSION[$field] = trim(htmlspecialchars(filter_var($_POST[$field], FILTER_SANITIZE_NUMBER_FLOAT)));
    } else {
        $_SESSION[$field] = "";
    }
}

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $_SESSION['userId'] = trim(htmlspecialchars($_POST['name']));
} else {
    $_SESSION['userId'] = "";
}

$userId = $_SESSION['userId'];
$hoursWorked = $_SESSION['hoursWorked'];
$daysWorked = $_SESSION['daysWorked'];
$hourlyRate = $_SESSION['hourlyRate'];
$tax = 0.15;
$bonus = $_SESSION['bonus'];
$benefits = $_SESSION['benefits'];
$date = $_SESSION['date'] = $_POST['date'];

$isValidDate = false;
if (validateDate($date)) {
    $isValidDate = true;
} else {
    $isValidDate = false;
}

$grossSalary = calculateGrossSalary($hourlyRate, $hoursWorked, $daysWorked, $bonus);
$netSalary = calculateNetSalary($grossSalary, $benefits, $tax);
$totalDeduction = getTotalDeduction($grossSalary, $benefits, $tax);

$isNotEmpty = !empty($userId) && !empty($hoursWorked) && !empty($daysWorked) && !empty($hourlyRate) && !empty($tax) && !empty($bonus) && !empty($benefits) && !empty($grossSalary) && !empty($netSalary) && $isValidDate;

if ($isNotEmpty) {

    try {
        $database = new Database();
        $conn = $database->getConnection();
        $conn->beginTransaction();

        $query = $conn->prepare("INSERT INTO employee (employee_hours_worked, employee_days_worked, user_id) VALUES (?, ?, ?)");
        $query->execute([$hoursWorked, $daysWorked, $userId]);

        $employeeId = $conn->lastInsertId();

        $query = $conn->prepare("INSERT INTO salary (salary_tax_deduction, salary_bonus, salary_benefits, salary_hourly_rate, salary_gross_salary, salary_total_deduction, salary_net_salary, salary_date_issued, employee_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->execute([$tax, $bonus, $benefits, $hourlyRate, $grossSalary, $totalDeduction, $netSalary, $date, $employeeId]);

        $salaryId = $conn->lastInsertId();

        $query = $conn->prepare("INSERT INTO payroll_history (salary_id, employee_id) VALUES (?, ?)");
        $query->execute([$salaryId, $employeeId]);

        $conn->commit();
        
        header("Location: ../views/manage.php");

    } catch (PDOException $e) {
        echo "PDOException: " . $e->getMessage();
    }

} else {
    include_once('../views/manage.php');
}

