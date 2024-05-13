<?php require_once('../models/database.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/e-paystub.css">
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

                                <a href="#" class="active"><i class="fa-regular fa-circle-dollar"></i>Payroll</a>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category-title">
                                <h3 class="others">Others</h3>
                            </div>
                            <div class="category-items">
                                <a href="e-support.php"><i class="fa-regular fa-circle-info"></i>Support</a>

                            </div>
                        </div>
                    </div>
                    <div class="profile-section">
                        <img class="profile-picture" src="../resources/images/payroll-guy.png" alt="Profile Picture">
                        <div class="profile-card">
                            <div class="profile-info">
                                <h4 class="username">Doja Cat</h4>
                                <p class="role">Employee</p>
                                <button class="sign-out-btn" onclick="location.href = 'login.php'">Sign Out</button>
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
                            </div>
                            <div class="apps-card">
                                <div class="app-card">
                                    <div class="title-search-container">
                                        <span>My Transactions</span>
                                    </div>
                                    <table class="content-table">
                                        <?php
                                        try {

                                            $database = new Database();
                                            $pdo = $database->getConnection();

                                            $query = "
                                            SELECT
                                                CONCAT(c.credentials_first_name, ' ', c.credentials_last_name) AS name,
                                                e.employee_hours_worked AS hours_worked,
                                                s.salary_hourly_rate AS hourly_rate,
                                                e.employee_days_worked AS days_worked,
                                                s.salary_bonus AS bonus,
                                                s.salary_tax_deduction AS tax,
                                                s.salary_benefits AS benefits,
                                                s.salary_total_deduction AS total_deduction,
                                                s.salary_gross_salary AS gross_salary,
                                                s.salary_net_salary AS net_salary,
                                                s.salary_date_issued AS issued_date
                                            FROM
                                                users u
                                            INNER JOIN
                                                credentials c ON u.user_id = c.user_id
                                            INNER JOIN
                                                employee e ON u.user_id = e.user_id
                                            INNER JOIN
                                                salary s ON e.employee_id = s.employee_id
                                            WHERE
                                                u.role_id = 1";

                                            $stmt = $pdo->query($query);
                                            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        } catch (PDOException $e) {
                                            echo "PDOException: " . $e->getMessage();
                                        }
                                        ?>
                                        <thead>
                                            <tr>
                                                <th><i><b>Hours Worked</b></th>
                                                <th><i><b>Hourly Rate</b></th>
                                                <th><i><b>Days Worked</b></th>
                                                <th><i><b>Bonus</b></i></th>
                                                <th><i><b>Tax</b></i></th>
                                                <th><i><b>Benefits</b></i></th>
                                                <th><i><b>Total Deduction</b></i></th>
                                                <th><i><b>Gross Salary</b></i></th>
                                                <th><i><b>Net Salary</b></i></th>
                                                <th><i><b>Issued Date</b></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($users as $user) : ?>
                                                <tr>
                                                    <td><?php echo $user['hours_worked']; ?></td>
                                                    <td>₱ <?php echo number_format($user['hourly_rate'], 2); ?></td>
                                                    <td><?php echo $user['days_worked']; ?></td>
                                                    <td>₱ <?php echo number_format($user['bonus'], 2); ?></td>
                                                    <td><?php echo $user['tax']; ?></td>
                                                    <td>₱ <?php echo number_format($user['benefits'], 2); ?></td>
                                                    <td>₱ <?php echo number_format($user['total_deduction'], 2); ?></td>
                                                    <td>₱ <?php echo number_format($user['gross_salary'], 2); ?></td>
                                                    <td>₱ <?php echo number_format($user['net_salary'], 2); ?></td>
                                                    <td><?php echo $user['issued_date']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
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