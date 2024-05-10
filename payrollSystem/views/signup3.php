<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/signUp.css">
    <script src="../resources/scripts/login.js" defer></script>
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
                            <p>Already have an account? <a href="#">Sign in</a></p>
                        </div>
                        <form action="#">
                            <div class="field">
                                <label for="street">Street</label>
                                <div class="field-input">
                                    <input type="text" name="street" id="street">
                                    <i class="fa-light fa-road"></i>
                                </div>
                            </div>
                            <div class="split">
                                <div class="field">
                                    <label for="city">City</label>
                                    <div class="field-input">
                                        <input type="text" name="city" id="city">
                                        <i class="fa-light fa-city"></i>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="province">Province</label>
                                    <div class="field-input">
                                        <input type="text" name="province" id="province">
                                        <i class="fa-light fa-mountains"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="split">
                                <div class="field">
                                    <label for="country">Country</label>
                                    <div class="field-input">
                                        <input type="text" name="country" id="country">
                                        <i class="fa-light fa-globe"></i>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="postal">Postal Code</label>
                                    <div class="field-input">
                                        <input type="text" name="postal" id="postal">
                                        <i class="fa-light fa-mailbox"></i>
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