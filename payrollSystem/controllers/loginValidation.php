<?php
session_start();

require_once('../models/database.php');

if (isset($_POST['email'], $_POST['password'])) {

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $_SESSION["email"] = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
    } else {
        $_SESSION["email"] = "";
    }

    $_SESSION["password"] = trim(htmlspecialchars($_POST["password"]));

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $isValidated = !empty($email) && !empty($password);

    if ($isValidated) {
        $database = new Database();
        $pdo = $database->getConnection();

        $sql = "SELECT u.user_id, u.role_id, c.credentials_password
                FROM credentials c
                INNER JOIN users u ON c.user_id = u.user_id
                WHERE c.credentials_email = :email";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {

                if (password_verify($password, $user['credentials_password'])) {

                    $_SESSION['user_id'] = $user['user_id'];

                    if ($user['role_id'] === 1) {
                        header("Location: ../views/e-paystub.php");
                        exit;
                    } else {
                        header("Location: ../views/manage.php");
                        exit;
                    }
                } else {
                    $_SESSION['errorMessage'] = "Password does not match. Please try again.";
                    include_once('../dialogs/loginError.php');
                }
            } else {
                $_SESSION['errorMessage'] = "User not found. Please try again";
                include_once('../dialogs/loginError.php');
            }
        } else {
            $_SESSION['errorMessage'] = "Error in SQL query.";
            include_once('../dialogs/loginError.php');
        }
    } else {
        include_once('../views/login.php');
    }
} else {
    include_once('../views/login.php');
}
