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
                            <h2>Nigga Denver</h2>
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
                                <a href="overview.php" class="active"><i class="fa-light fa-grid"></i>Overview</a>
                                <a href="manage.php"><i class="fa-regular fa-circle-dollar"></i>Manage Users</a>
                                <a href="#"><i class="fa-light fa-user-group"></i>Leave Report</a>
                                <a href="history.php"><i class="fa-light fa-file-invoice"></i>Payroll History</a>
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
                    <div class="profile">
                        <div class="profile-left">
                            <img src="../resources/images/logo-icon.png">
                        </div>
                        <div class="profile-center">
                            <h4 class="username">Nigga Dick</h4>
                            <p class="role">Administrator</p>
                        </div>
                        <div class="profile-right">
                            <i class="fa-light fa-circle-chevron-up"></i>
                        </div>
                    </div>
                </div>
            <div class="right-pane">
                <div class="dashboard-content">
                    <div class="content-section">
                        <div class="content-section-title">
                            <span>History</span>
                            <div class="button-container">
                                <button>Filter</button>
                                <button>Export</button>
                            </div>
                        </div>
                        <div class="apps-card">
                            <div class="app-card">
                                <div class="title-search-container">
                                <span>Team Members</span>
                                <div class="search-filter-container">
                                    <input type="text" placeholder="Search..">
                                    <button>Filter</button>
                                </div>
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
                                        <td>The Rock</td>
                                        <td>IT Department</td>
                                        <td>Senior Developer</td>
                                        <td>I don't know</td>
                                        <td>I don't know</td>
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