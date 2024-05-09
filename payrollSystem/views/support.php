<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/support.css">
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
                                <a href="manage.php"><i class="fa-regular fa-circle-dollar"></i>Payroll</a>
                                <a href="report.php"><i class="fa-light fa-user-group"></i>Employees</a>
                                <a href="history.php"><i class="fa-light fa-file-invoice"></i>Payroll History</a>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category-title">
                                <h3>Others</h3>
                            </div>
                            <div class="category-items">
                                <a href="#" class="active"><i class="fa-regular fa-circle-info"></i>Support</a>
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
                            <span>Support</span>
                        </div>
                        <div class="apps-card">
                            <div class="app-card">
                                <div class="title-search-container">
                                <span>Frequently Asked Questions</span>
                                </div>
                                <div class="support">
                                <div class="support-image">
                                    <img src="../resources/images/support-tm.png">
                                </div>
                                <div class="accordion">
                                <div>
                                    <input type="radio" name="example_accordion" id="section2" class="accordion__input">
                                    <label for="section4" class="accordion__label">What is PayStation?</label>
                                    <div class="accordion__content">
                                        <p>PayStation is a payroll system that automates and streamlines your company's payroll processes using a MySQL database.</p>
                                    </div>
                                </div>
                                <div>
                                    <input type="radio" name="example_accordion" id="section2" class="accordion__input">
                                    <label for="section4" class="accordion__label">What are the benefits of using PayStation</label>
                                    <div class="accordion__content">
                                        <p>Benefits include increased efficiency, reduced errors, improved compliance, enhanced security, and cost-effectiveness.</p>
                                    </div>
                                </div>
                                <div>
                                    <input type="radio" name="example_accordion" id="section2" class="accordion__input">
                                    <label for="section4" class="accordion__label">What features does PayStation offer?</label>
                                    <div class="accordion__content">
                                        <p>PayStation offers payroll processing, tax filing and compliance, reporting and analytics, leave management, and employee tracking.</p>
                                    </div>
                                </div>
                                <div>
                                    <input type="radio" name="example_accordion" id="section2" class="accordion__input">
                                    <label for="section4" class="accordion__label">How do I get started with PayStation?</label>
                                    <div class="accordion__content">
                                        <p>Contact our sales team, set up your company account, configure your payroll settings, and start processing payroll.</p>
                                    </div>
                                </div>
                                <div>
                                    <input type="radio" name="example_accordion" id="section2" class="accordion__input">
                                    <label for="section4" class="accordion__label">What if I need help using PayStation?</label>
                                    <div class="accordion__content">
                                        <p>We provide comprehensive documentation, responsive customer support, and training webinars to assist you.</p>
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
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script>
    document.querySelectorAll('.accordion__label').forEach(function(label) {
    label.addEventListener('click', function(e) {
    var input = e.target.previousElementSibling;
    input.checked = !input.checked;
    });
 });
</script>
</html>