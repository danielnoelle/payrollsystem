<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('../controllers/loadFunctions.php');
require_once('../models/database.php');

$tax = 0.15;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/report.css">
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
                                <a href="../views/report.php"><i class="fa-light fa-user-group"></i>Employees</a>
                                <a href="history.php"><i class="fa-light fa-file-invoice"></i>Payroll History</a>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category-title">
                                <h3>Others</h3>
                            </div>
                            <div class="category-items">
                                <a href="support.php"><i class="fa-regular fa-circle-info"></i>Support</a>

                            </div>
                        </div>
                    </div>
                    <div class="profile-section">
                        <div class="profile-card">
                            <div class="profile-info">
                                <h4 class="username"><?php
                                                        try {

                                                            $userId = $_SESSION['user_id'];

                                                            $database = new Database();
                                                            $conn = $database->getConnection();

                                                            $query = "SELECT c.user_id, CONCAT(c.credentials_first_name, ' ', c.credentials_last_name) as employee_name
                                                                FROM credentials c 
                                                                INNER JOIN users u ON u.user_id = c.user_id
                                                                WHERE c.user_id = $userId;";
                                                            $stmt = $conn->query($query);

                                                            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                                                            echo $result['user_id'];
                                                        } catch (PDOException $e) {
                                                            echo "PDOException: " . $e->getMessage();
                                                        }
                                                        ?></h4>
                                <p class="role">Administrator</p>
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
                                <div class="button-container">
                                    <button id="open-popup">Run Payroll</button>
                                </div>
                                <div id="popup" class="popup">
                                    <div class="close-btn">&times;</div>
                                    <div class="popup-content">
                                        <div class="popup-text">Personal Information</div>
                                        <form class="form" action="../controllers/addToEmployee.php" method="post">
                                            <div class="form-row">
                                                <div class="form-element">
                                                    <label for="name">Full Name:</label>
                                                    <?php
                                                    try {

                                                        $database = new Database();
                                                        $conn = $database->getConnection();

                                                        $query = "SELECT c.user_id, CONCAT(c.credentials_first_name, ' ', c.credentials_last_name) as employee_name
                                                                      FROM credentials c 
                                                                      INNER JOIN users u ON u.user_id = c.user_id 
                                                                      WHERE u.role_id = 1";
                                                        $stmt = $conn->query($query);

                                                        echo "<select name=\"name\" id=\"name\">";
                                                        echo "<option value=\"\" style=\"display: none;\">Select Employee</option>";

                                                        if ($stmt->rowCount() > 0) {
                                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                $employeeName = $row['employee_name'];
                                                                $userId = $row['user_id'];
                                                                echo "<option value=\"$userId\">$employeeName</option>";
                                                            }
                                                        } else {
                                                            echo "<option value=''>No employees found</option>";
                                                        }

                                                        echo "</select>";
                                                    } catch (PDOException $e) {
                                                        echo "PDOException: " . $e->getMessage();
                                                    }
                                                    ?>
                                                </div>
                                                <div class="form-element">
                                                    <label for="hourlyRate">Hourly Rate: ₱</label>
                                                    <input type="text" name="hourlyRate" id="hourlyRate" placeholder="Enter hourly rate">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-element">
                                                    <label for="hoursWorked">Hours Worked</label>
                                                    <input type="text" name="hoursWorked" id="hoursWorked" placeholder="Enter hours worked">
                                                </div>
                                                <div class="form-element">
                                                    <label for="daysWorked">Days Worked</label>
                                                    <input type="text" name="daysWorked" id="daysWorked" placeholder="Enter days worked">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-element">
                                                    <label for="tax">Tax Deduction:</label>
                                                    <input type="text" name="tax" id="tax" placeholder="Enter value" value="<?php $percentage = $tax * 100;
                                                                                                                            echo $percentage . '%'; ?>" readonly>
                                                </div>
                                                <div class="form-element">
                                                    <label for="bonus">Bonuses: ₱</label>
                                                    <input type="text" name="bonus" id="bonus" placeholder="Enter value">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-element">
                                                    <label for="date">Issued Date:</label>
                                                    <input type="date" name="date" id="date">
                                                </div>
                                                <div class="form-element">
                                                    <label for="benefits">Benefits: ₱</label>
                                                    <input type="text" name="benefits" id="benefits" placeholder="Enter value">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-element">
                                                    <label for="salary">Gross Salary: ₱</label>
                                                    <input type="text" name="salary" id="salary" placeholder="Gross salary appears here" readonly>
                                                </div>
                                                <div class="form-element">
                                                    <label for="netSalary">Net Salary: ₱</label>
                                                    <input type="text" name="netSalary" id="netSalary" placeholder="Net salary appears here" readonly>
                                                </div>
                                            </div>
                                            <input type="submit" value="Submit" class="btn-reg">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="apps-card">
                                <div class="app-card">
                                    <div class="title-search-container">
                                        <span>Employees</span>
                                        <div class="search-filter-container">
                                        </div>
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
                                                <th><i><b>Name</b></i></th>
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
                                                    <td><?php echo $user['name']; ?></td>
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
</body>
<script>
    const today = new Date();
    const formattedDate = today.toISOString().split('T')[0];
    document.getElementById('date').value = formattedDate;

    const openPopupButton = document.getElementById("open-popup");
    const closePopupButton = document.querySelector(".close-btn");
    const popup = document.querySelector(".popup");

    const hourlyRateInput = document.getElementById('hourlyRate');
    const hoursWorkedInput = document.getElementById('hoursWorked');
    const daysWorkedInput = document.getElementById('daysWorked');
    const bonusInput = document.getElementById('bonus');
    const salaryInput = document.getElementById('salary');
    const benefitsInput = document.getElementById('benefits');
    const netSalaryInput = document.getElementById('netSalary');
    const taxInput = document.getElementById('tax');

    const originalBorderColor = 'rgba(33, 33, 33, 0.8)';

    function calculateGrossSalary() {
        const hourlyRate = parseFloat(hourlyRateInput.value);
        const hoursWorked = parseFloat(hoursWorkedInput.value);
        const daysWorked = parseFloat(daysWorkedInput.value);
        const bonus = parseFloat(bonusInput.value);

        hourlyRateInput.style.borderColor = originalBorderColor;
        hoursWorkedInput.style.borderColor = originalBorderColor;
        daysWorkedInput.style.borderColor = originalBorderColor;
        bonusInput.style.borderColor = originalBorderColor;

        if (isNaN(hourlyRate)) {
            hourlyRateInput.style.borderColor = 'red';
        }
        if (isNaN(hoursWorked)) {
            hoursWorkedInput.style.borderColor = 'red';
        }
        if (isNaN(daysWorked)) {
            daysWorkedInput.style.borderColor = 'red';
        }

        if (isNaN(bonus)) {
            bonusInput.style.borderColor = 'red';
        }

        if (!isNaN(hourlyRate) && !isNaN(hoursWorked) && !isNaN(daysWorked)) {
            const grossSalary = (hourlyRate * hoursWorked * daysWorked);
            salaryInput.value = grossSalary.toFixed(2);

            if (!isNaN(bonus)) {
                const grossSalary = (hourlyRate * hoursWorked * daysWorked) + bonus;
                salaryInput.value = grossSalary.toFixed(2);
                return grossSalary;
            }

            return grossSalary;

        }
    }

    function calculateNetSalary() {

        const benefits = parseFloat(benefitsInput.value);
        const tax = parseFloat(<?php echo $tax; ?>);

        benefitsInput.style.borderColor = originalBorderColor;
        taxInput.style.borderColor = originalBorderColor;

        if (isNaN(benefits)) {
            benefitsInput.style.borderColor = 'red';
        }
        if (isNaN(tax)) {
            taxInput.style.borderColor = 'red';
        }

        if (!isNaN(benefits) && !isNaN(tax)) {

            const grossSalary = calculateGrossSalary();
            const taxableIncome = grossSalary - benefits;
            const taxAmount = taxableIncome * tax;
            const netSalary = taxableIncome - taxAmount;

            netSalaryInput.value = netSalary.toFixed(2);

        }
    }

    openPopupButton.addEventListener("click", () => {
        Swal.fire({
            icon: "info",
            title: "Take Note",
            text: "When the input's border turns red, that means the value entered is invalid",
            showConfirmButton: true,
            confirmButtonText: "Okay",
        });
        popup.style.display = "block";
    });

    closePopupButton.addEventListener("click", () => {
        popup.style.display = "none";
    });

    hourlyRateInput.addEventListener('input', calculateGrossSalary);
    hoursWorkedInput.addEventListener('input', calculateGrossSalary);
    daysWorkedInput.addEventListener('input', calculateGrossSalary);
    bonusInput.addEventListener('input', calculateGrossSalary);
    benefitsInput.addEventListener('input', calculateNetSalary);
    taxInput.addEventListener('input', calculateNetSalary);
</script>

</html>