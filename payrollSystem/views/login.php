<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/login.css">
    <script src="../resources/scripts/login.js" defer></script>
    <title>PayStation - Login</title>
</head>

<body>
    <div class="container">
        <div class="video-bg">
            <video src="../resources/videos/bg.mp4" autoplay muted loop></video>
        </div>
        <!-- <?php include_once('../dialogs/loadingScreen.html'); ?> -->
        <div class="login-container">
            <div class="logo">
                <img src="../resources/images/logo-icon.png">
            </div>
            <div class="title">
                <h1>Welcome back!</h1>
                <p>Enter your credentials to log back in.</p>
            </div>
            <form id="form" action="" method="post">
                <div class="input field">
                    <label for="email">Email <span>*</span></label>
                    <div class="input-case">
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                        <i class="fa-light fa-envelope"></i>
                    </div>
                </div>
                <div class="input field">
                    <label for="password">Password <span>*</span></label>
                    <div class="input-case">
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                        <i class="fa-light fa-lock"></i>
                    </div>
                </div>
                <div class="input role">
                    <label>Role <span>*</span></label>
                    <div class="roles">
                        <input type="radio" name="role" id="admin" value="admin">
                        <label for="admin">Admin</label>
                        <input type="radio" name="role" id="employee" value="employee">
                        <label for="employee">Employee</label>
                    </div>
                </div>
                <div class="input submit" id="submitButton">
                    <input type="submit" value="Login" onclick="prepareDashboard()">
                    <i class="fa-duotone fa-spinner" id="spinner"></i>
                </div>
            </form>
            <div class="no-account">
                <p>Don't have an account? <a href="../views/signup.php">Sign up</a></p>
            </div>
        </div>
    </div>
</body>

</html>