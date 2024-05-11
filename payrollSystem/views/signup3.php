<?php
require_once('../controllers/loadFunctions.php');
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
                        <form action="../controllers/databaseInsertion.php" method="post">
                            <div class="field">
                                <label for="street">Street <span>*</span><span class="error-msg" id="streetSpan">Field is blank</span></label>
                                <div class="field-input">
                                    <input type="text" name="street" id="street" value="<?php getValue('street')?>" required>
                                    <i class="fa-light fa-road"></i>
                                    <?php validateInput('street', 'streetSpan', 'street'); ?>
                                </div>
                            </div>
                            <div class="split">
                                <div class="field">
                                    <label for="city">City <span>*</span><span class="error-msg" id="citySpan">Field is blank</span></label>
                                    <div class="field-input">
                                        <input type="text" name="city" id="city" value="<?php getValue('city')?>" required>
                                        <i class="fa-light fa-city"></i>
                                        <?php validateInput('city', 'citySpan', 'city'); ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="province">Province <span>*</span><span class="error-msg" id="provinceSpan">Field is blank</span></label>
                                    <div class="field-input">
                                        <input type="text" name="province" id="province" value="<?php getValue('province')?>" required>
                                        <i class="fa-light fa-mountains"></i>
                                        <?php validateInput('province', 'provinceSpan', 'province'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="split">
                                <div class="field">
                                    <label for="country">Country <span>*</span><span class="error-msg" id="countrySpan">Field is blank</span></label>
                                    <div class="field-input">
                                        <input type="text" name="country" id="country" value="<?php getValue('country')?>" required>
                                        <i class="fa-light fa-globe"></i>
                                        <?php validateInput('country', 'countrySpan', 'country'); ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="postal">Postal Code <span>*</span><span class="error-msg" id="postalSpan">Field is blank</span></label>
                                    <div class="field-input">
                                        <input type="text" name="postal" id="postal" value="<?php getValue('postal')?>" required>
                                        <i class="fa-light fa-mailbox"></i>
                                        <?php validateInput('postal', 'postalSpan', 'postal'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="submit">
                                <input type="submit" value="Sign up">
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