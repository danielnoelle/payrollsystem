<?php
require('../controllers/loadFunctions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/signUp.css">
    <title>PayStation - Sign Up</title>
    <script src="../resources/scripts/signup.js"></script>
</head>

<body>
    <div class="container">
        <div class="video-bg">
            <video src="../resources/videos/bg.mp4" autoplay muted loop></video>
        </div>
        <div class="sign-up-container">
            <div class="contents">
                <div class="left">
                    <div class="left-content">
                        <div class="model">
                            <img src="../resources/images/employee-climbing.png">
                        </div>
                        <div class="tagline">
                            <h1>Unlocking the potential of your workforce, PayStation is your payroll solution.</h1>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="right-content">
                        <div class="logo">
                            <img src="../resources/images/logo-name.png">
                        </div>
                        <div class="title">
                            <h2>Get Started</h2>
                            <p>Already have an account? <a href="../views/login.php">Sign in</a></p>
                        </div>
                        <form action="../controllers/signUpValidation.php" method="post">
                            <div class="field">
                                <label for="email">Email <span>*</span><span class="error-msg" id="emailSpan">Invalid or used email. Please try again</span></label>
                                <div class="field-input">
                                    <input type="email" name="email" id="email" value="<?php getValue('email')?>" required>
                                    <i class="fa-light fa-envelope"></i>
                                    <?php validateInput('email', 'emailSpan', 'email'); ?>
                                </div>
                            </div>
                            <div class="field">
                                <label for="password">Password <span>*</span><span class="error-msg" id="passwordSpan">Invalid password. Please try again</span></label>
                                <div class="field-input">
                                    <input type="password" name="password" id="password" required>
                                    <i class="fa-light fa-lock"></i>
                                    <?php validateInput('password', 'passwordSpan', 'password') ?>
                                </div>
                            </div>
                            <div class="role">
                                <label>Role <span>*</span><span class="error-msg" id="roleSpan">Invalid role. Please try again</span></label>
                                <div class="field-input">
                                    <select name="role" id="role">
                                        <option value="" style="display: none;">Select Role</option>
                                        <option value="2">Admin</option>
                                        <option value="1">Employee</option>
                                    </select>
                                    <i class="fa-light fa-user-group-simple"></i>
                                    <?php validateInput('role', 'roleSpan', 'role') ?>
                                </div>
                            </div>
                            <div class="submit">
                                <input type="submit" value="Continue">
                            </div>
                        </form>
                        <div class="terms">
                            <p>By signing up, I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("password");

        emailInput.addEventListener('input', () => {

            emailInput.reportValidity();
            if (emailInput.value === "") {
                emailInput.setCustomValidity("Please enter your email");
            }

            if (!validateEmail(emailInput.value)) {
                emailInput.setCustomValidity("Invalid format. Please try again");
            } else {
                emailInput.setCustomValidity("");
            }

            emailInput.reportValidity();
        });

        passwordInput.addEventListener('input', () => {

            passwordInput.reportValidity();

            if (passwordInput.value === "") {
                passwordInput.setCustomValidity("Please enter a password");
            } else if (passwordInput.value.length < 8) {
                passwordInput.setCustomValidity("Please enter at least 8 characters minimum");
            } else {
                passwordInput.setCustomValidity("");
            }

            passwordInput.reportValidity();
        });
    </script>
</body>

</html>