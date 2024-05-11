<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/history.css">
    <title>History</title>
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
                            <h2>Company Name</h2>
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
                                <a href="overview.php"><i class="fa-light fa-grid"></i>Overview</a>
                                <a href="manage.php"><i class="fa-regular fa-circle-dollar"></i>Payroll</a>
                                <a href="report.php"><i class="fa-light fa-user-group"></i>Employees</a>
                                <a href="#" class="active"><i class="fa-light fa-file-invoice"></i>Payroll History</a>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category-title">
                                <h3>Others</h3>
                            </div>
                            <div class="category-items">
                                <a href="support.php"><i class="fa-regular fa-circle-info"></i>Support</a>
                                <a href="settings.php"><i class="fa-regular fa-gear"></i>Settings</a>
                            </div>
                        </div>
                    </div>
                        <div class="profile-section">
                    <div class="profile-card">
                        <div class="profile-info">
                            <h4 class="username">John Doe</h4>
                            <p class="role">Administrator</p>
                            <button class="sign-out-btn onclick="location.href = 'login.php'>Sign Out</button>
                        </div>
                    </div>
                    <div class="trademark">@2024 PayStation</div>
                </div>
                </div>
            <div class="right-pane">
                <div class="dashboard-content">
                    <div class="content-section">
                        <div class="content-section-title">
                            <span>History</span>
                            <div class="button-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="apps-card">
                            <div class="app-card">
                                <div class="title-search-container">
                                <span>All Transactions</span>
                                </div>
                                <table class="content-table">
                                <thread>
                                    <tr>
                                        <th><i><b>Employee</b></i></th>
                                        <th><i><b>Hours Worked</b></th>
                                        <th><i><b>Hourly Rate</b></th>
                                        <th><i><b>Deduction</b></th>
                                        <th><i><b>Tax</b></th>
                                    </tr>
                                </thread>
                                <tbody>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
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

</html>