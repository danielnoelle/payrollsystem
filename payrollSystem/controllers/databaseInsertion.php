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
$role = 1;
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

$isNotEmpty = !empty($street) && !empty($city) && !empty($province) && !empty($country) && !empty($postal);

if ($isNotEmpty) {
    try {

        $database = new Database();
        $pdo = $database->getConnection();

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO address (address_street, address_city, address_province, address_country, address_postal_code) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$street, $city, $province, $country, $postal]);

        $addressId = $pdo->lastInsertId();

        $companyId = 1;

        $numDigits = 4;

        $min = pow(10, $numDigits - 1);
        $max = pow(10, $numDigits) - 1;

        $stmt = $pdo->prepare("SELECT COUNT(*) AS count FROM users WHERE user_id LIKE ?");
        $stmt->execute([date("Y", strtotime("now")) . "-%"]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $existingCount = $result['count'];

        if ($existingCount >= $max - $min + 1) {
            echo "Error: Maximum user IDs for the year reached. Please try again later.";
            exit;
        } else {
            do {
                $randomNumber = mt_rand($min, $max);
                $userId = date("Y", strtotime("now")) . "-" . str_pad($randomNumber, $numDigits, '0', STR_PAD_LEFT);

                $stmt = $pdo->prepare("SELECT COUNT(*) AS count FROM users WHERE user_id = ?");
                $stmt->execute([$userId]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                $count = $result['count'];
            } while ($count > 0);

        }

        $stmt = $pdo->prepare("INSERT INTO users (user_id, company_id, role_id) VALUES (?, ?, ?)");
        $stmt->execute([$userId, $companyId, $role]);

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $pdo->prepare("INSERT INTO credentials (credentials_email, credentials_password, credentials_first_name, credentials_last_name, credentials_gender, credentials_birthdate, credentials_contact_no, address_id, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$email, $hashedPassword, $fname, $lname, $gender, $birthdate, $contact, $addressId, $userId]);

        $pdo->commit();

        if ($role === 1) {
            header("Location: ../views/e-paystub.php");
            exit;
        } else {
            header("Location: ../views/manage.php");
            exit;
        }
    } catch (PDOException $e) {
        $pdo->rollBack();
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    include_once('../views/signup3.php');
}
