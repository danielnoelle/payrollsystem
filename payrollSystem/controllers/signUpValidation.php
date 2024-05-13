<?php

require_once('../models/database.php');

session_start();

$database = new Database();
$pdo = $database->getConnection();

function convertToInteger($numberString) {
   
    $numberString = trim($numberString);
    
    
    if (empty($numberString)) {
        return "Empty string provided. Please provide a valid number string.";
    }

    if (!preg_match('/^-?\d+$/', $numberString)) {
        return "Invalid number string provided. Please provide a valid integer.";
    }

    $integerValue = intval($numberString);

    return $integerValue;
}

$_SESSION["password"] = trim(htmlspecialchars($_POST["password"]));

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $_SESSION["email"] = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
} else {
    $_SESSION["email"] = "";
}

$email = $_SESSION['email'];
$password = $_SESSION['password'];

$isEmailFound = false;
$isValidated = !empty($email) && !empty($password);

try {
    $stmt = $pdo->prepare("SELECT * FROM credentials WHERE credentials_email = :email");

    $stmt->bindParam(':email', $email);

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $isEmailFound = true;
    } else {
        $isEmailFound = false;
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if ($isValidated && !$isEmailFound) {
    include_once("../views/signup2.php");
} else {
    include_once("../views/signup.php");
}
