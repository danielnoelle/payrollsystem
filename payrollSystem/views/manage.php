<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/manage.css">
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
                                <a href="overview.php"><i class="fa-light fa-grid"></i>Overview</a>
                                <a href="#" class="active"><i class="fa-regular fa-circle-dollar"></i>Payroll</a>
                                <a href="report.php"><i class="fa-light fa-user-group"></i>Employees</a>
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
                    <div class="profile-section">
                    <div class="profile-card">
                        <div class="profile-info">
                            <h4 class="username">John Doe</h4>
                            <p class="role">Administrator</p>
                            <button class="sign-out-btn">Sign Out</button>
                        </div>
                    </div>
                    <div class="trademark">@2024 PayStation</div>
                </div>
                </div>
            <div class="right-pane">
                <div class="dashboard-content">
                    <div class="content-section">
                        <div class="content-section-title">
                            <span>Payroll</span>
                            <div class="button-container">
                                <div class="dropdown">
                                    <div class="dropdown-content">
                                        <a href="#">CSV</a>
                                        <a href="#">PDF</a>
                                    </div>
                                </div>
                                <button id="open-popup">Add Payroll</button>
                            </div>
                            <div id="popup" class="popup">
                                <div class="close-btn">&times;</div>
                                <div class="popup-content">
                                <div class="popup-text">Personal Information</div>    
                                <div class="form">
                                    <div class="form-row">
                                    <div class="form-element">
                                        <label for="fullname">Full Name:</label>
                                        <input type="text" id="fName" placeholder="Enter full name">
                                    </div>
                                    <div class="form-element">
                                        <label for="email">Hourly Rate</label>
                                        <input type="text" id="email" placeholder="Enter hourly rate">
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-element">
                                        <label for="password">Hours Worked</label>
                                        <input type="password" id="password" placeholder="Enter hours worked">
                                    </div>
                                    <div class="form-element">
                                        <label for="password">Days Worked</label>
                                        <input type="password" id="password" placeholder="Enter days worked">
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-element">
                                        <label for="deductions">Tax Deductions</label>
                                        <input type="text" id="deduc" placeholder="Enter value">
                                    </div>
                                    <div class="form-element">
                                        <label for="bonuses">Benefits Deduction</label>
                                        <input type="text" id="bonus" placeholder="Enter value">
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-element">
                                        <label for="password">Other Deductions</label>
                                        <input type="password" id="password" placeholder="Enter value">
                                    </div>
                                    <div class="form-element">
                                        <label for="date">Issued Date:</label>
                                        <input type="date" id="date" placeholder="Enter your password">
                                    </div>
                                    </div>
                                        
                                    </div>
                                    <button class="btn-reg">Register</button>
                                    </div>
                                </div>
                            </div>
                        <div class="apps-card">
                            <div class="app-card">
                                <div class="title-search-container">
                                <span>Transactions</span>
                                <div class="search-filter-container">  
                                </div>
                                </div>
                                <table class="content-table">
                                <thread>
                                    <tr>
                                        <th><i><b>Name</b></i></th>
                                        <th><i><b>Department</b></th>
                                        <th><i><b>Job Title</b></th>
                                        <th><i><b>Employment Type</b></th>
                                    </tr>
                                </thread>
                                <tbody>
                                    <tr>
                                        <td>The Rock</td>
                                        <td>IT Department</td>
                                        <td>Senior Developer</td>
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
<script>
    const openPopupButton = document.getElementById("open-popup");
    const closePopupButton = document.querySelector(".close-btn");
    const popup = document.querySelector(".popup");

    openPopupButton.addEventListener("click", () => {
    popup.style.display = "block";
    });

    closePopupButton.addEventListener("click", () => {
    popup.style.display = "none";
    });
  </script>
</html>