<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/e-overview.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="video-bg">
            <video src="../resources/videos/bg.mp4" autoplay muted loop></video>
        </div>
        <div class="content">
            <div class="top">
                <nav>
                    <div class="left-nav">
                        <div class="logo">
                            <img src="../resources/images/logo-name.png">
                        </div>
                    </div>
                    <div class="right-nav">
                        <div class="user-fullname">
                            <h2>7R Grocery Store</h2>
                        </div>
                        <div class="profile-icon">
                            <img src="../resources/images/logo-icon.png">
                        </div>
                    </div>
                </nav>
            </div>
            <div class="bottom">
                <div class="left-pane">
                    <div class="categories">
                        <div class="category">
                            <div class="category-title">
                                <h3>General</h3>
                            </div>
                            <div class="category-items">
                                <a href="#" class="active"><i class="fa-light fa-grid"></i>Overview</a>
                                <a href="e-paystub.php"><i class="fa-regular fa-circle-dollar"></i>Paystub</a>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category-title">
                                <h3 class="others">Others</h3>
                            </div>
                            <div class="category-items">
                                <a href="e-support.php"><i class="fa-regular fa-circle-info"></i>Support</a>
                                <a href="e-settings.php"><i class="fa-regular fa-gear"></i>Settings</a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-section">
                    <img class="profile-picture" src="../resources/images/payroll-guy.png" alt="Profile Picture">
                    <div class="profile-card">
                        <div class="profile-info">
                            <h4 class="username">Doja Cat</h4>
                            <p class="role">Employee</p>
                            <button class="sign-out-btn">Sign Out</button>
                        </div>
                    </div>
                    <div class="trademark">@2024 PayStation</div>
                </div>
                </div>
            <div class="right-pane">
                <div class="dashboard-content">
                    <div class="content-section">
                        <div class="content-section-title">Dashboard</div>
                        <div class="apps-card">
                            <div class="app-card">
                                <span>Employee Headcount</span>
                                <div class="app-info">30 Mins ago</div>
                                <div class="app-card__subtext">50K</div>
                                <div class="app-card-contents">  
                                </div>
                            </div>
                            <div class="app-card">
                                <span>Employee Attendance</span>
                                <div class="app-info">30 Mins ago</div>
                                <div class="app-card__subtext">3000</div>
                                <div class="app-card-contents">
                                </div>
                            </div>
                            <div class="large-app-card">
                                <span>Demographics</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</html>
