<?php
require('../controllers/loadFunctions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/signUp.css">
    <script src="../resources/scripts/signup.js"></script>
    <title>PayStation - Sign Up</title>
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
                        <form action="../controllers/signUpValidation2.php" method="post">
                            <div class="split">
                                <div class="field">
                                    <label for="fname">First Name <span>*</span><span class="error-msg" id="fnameSpan">Field is empty</span></label>
                                    <div class="field-input">
                                        <input type="text" name="fname" id="fname" value="<?php getValue('fname')?>" required>
                                        <i class="fa-light fa-user"></i>
                                        <?php validateInput('fname', 'fnameSpan', 'fname'); ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="lname">Last Name <span>*</span><span class="error-msg" id="lnameSpan">Field is empty</span></label>
                                    <div class="field-input">
                                        <input type="text" name="lname" id="lname" value="<?php getValue('lname')?>" required>
                                        <i class="fa-light fa-user-tie"></i>
                                        <?php validateInput('lname', 'lnameSpan', 'lname'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="split">
                                <div class="field">
                                    <label for="gender">Gender <span>*</span><span class="error-msg" id="genderSpan">Select a gender</span></label>
                                    <div class="field-input">
                                        <select name="gender" id="gender" value="<?php getValue('gender')?>" required>
                                            <option value="" style="display: none;">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Non-binary">Non-binary</option>
                                            <option value="Rather not say">Rather not say</option>
                                        </select>
                                        <i class="fa-light fa-venus-mars"></i>
                                        <?php validateInput('gender', 'genderSpan', 'gender'); ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="birthdate">Birthdate <span>*</span><span class="error-msg" id="birthdateSpan">Invalid date</span></label>
                                    <div class="field-input">
                                        <input type="date" name="birthdate" id="birthdate" value="<?php getValue('birthdate')?>" required>
                                        <i class="fa-light fa-calendar-days"></i>
                                        <?php validateInput('birthdate', 'birthdateSpan', 'birthdate'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label for="contact">Contact <span>*</span><span class="error-msg" id="contactSpan">Invalid phone number</span></label>
                                <div class="field-input">
                                    <input type="tel" name="contact" id="contact" value="<?php getValue('contact')?>" required>
                                    <i class="fa-light fa-phone"></i>
                                    <?php validateInput('contact', 'contactSpan', 'contact'); ?>
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
</body>

</html>