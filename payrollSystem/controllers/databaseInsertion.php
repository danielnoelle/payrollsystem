<?php

session_start();

require_once('../models/database.php');
require_once('../models/user.php');

function sanitize($data)
{
    return htmlspecialchars(trim($data));
}

$fields = ['street', 'city', 'province', 'country', 'postal'];
foreach ($fields as $field) {
    $_SESSION[$field] = isset($_POST[$field]) ? sanitize($_POST[$field]) : "";
}

$email = $_SESSION['email'];
$password = $_SESSION['password'];
$role = $_SESSION['role'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$gender = $_SESSION['gender'];
$birthdate = $_SESSION['birthdate'];
$contact = $_SESSION['contact'];
$street = $_SESSION['street'];
$city = $_SESSION['city'];
$province = $_SESSION['province'];
$country = $_SESSION['country'];
$postal = $_SESSION['postal'];

$database = new Database();
$pdo = $database->getConnection();

$isNotEmpty = !empty($street) && !empty($city) && !empty($province) && !empty($country) && !empty($postal);

if ($isNotEmpty) {
    try {

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO address (address_street, address_city, address_province, address_country, address_postal_code) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$street, $city, $province, $country, $postal]);

        $numDigits = 4;

        $min = pow(10, $numDigits - 1);
        $max = pow(10, $numDigits - 1);

        $userId = date("Y", strtotime("now")) . "-" . rand($min, $max);

        $addressId = $pdo->lastInsertId();

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $pdo->prepare("INSERT INTO credentials (credentials_email, credentials_password, credentials_first_name, credentials_last_name, credentials_gender, credentials_birthdate, credentials_contact_no, address_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$email, $hashedPassword, $fname, $lname, $gender, $birthdate, $contact, $addressId]);

        $credentialsId = $pdo->lastInsertId();

        $companyId = 1;

        $stmt = $pdo->prepare("INSERT INTO users (user_id, company_id, role_id, credentials_id) VALUES (?, ?, ?, ?)");
        $stmt->execute([$userId, $companyId, $role, $credentialsId]);

        $pdo->commit();

        if ($role === 1) {
            header("Location: ../views/e-overview.php");
            exit;
        } else {
            header("Location: ../views/overview.php");
            exit;
        }
    } catch (PDOException $e) {
        $pdo->rollBack();
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    include_once('../views/signup3.php');
}
