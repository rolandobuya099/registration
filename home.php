<!DOCTYPE html>
<?php
$name = $_POST["fullname"] ?? "Guest";
$number = $_POST["number"] ?? "N/A";
$username = $_POST["username"] ?? "N/A";
$email = $_POST["myEmail"] ?? "N/A";
$password = $_POST["myPassword"] ?? "N/A";
$birthdate = $_POST["birthdate"] ?? "N/A";
$gender = $_POST["gender"] ?? "N/A";
$status = $_POST["status"] ?? "N/A";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Complete</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="success-shell">
        <div class="success-card">
            <div class="success-header">
                <div class="success-icon">✓</div>
                <div>
                    <p class="eyebrow">Welcome aboard</p>
                    <h1>Hello, <?= htmlspecialchars($name) ?></h1>
                </div>
            </div>

            <div class="status-badge">Registration Successful</div>

            <div class="info-grid">
                <div class="info-item">
                    <span class="label">Age</span>
                    <strong><?= htmlspecialchars($number) ?> years</strong>
                </div>
                <div class="info-item">
                    <span class="label">Username</span>
                    <strong><?= htmlspecialchars($username) ?></strong>
                </div>
                <div class="info-item">
                    <span class="label">Email</span>
                    <strong><?= htmlspecialchars($email) ?></strong>
                </div>
                <div class="info-item">
                    <span class="label">Birthdate</span>
                    <strong><?= htmlspecialchars($birthdate) ?></strong>
                </div>
                <div class="info-item">
                    <span class="label">Gender</span>
                    <strong><?= htmlspecialchars($gender) ?></strong>
                </div>
                <div class="info-item">
                    <span class="label">Status</span>
                    <strong><?= htmlspecialchars($status) ?></strong>
                </div>
            </div>

            <div class="password-box">
                <span class="label">Password</span>
                <strong><?= htmlspecialchars($password) ?></strong>
            </div>

            <p class="thank-you">Thank you for registering with us.</p>

            <button type="button" class="button" onclick="window.location.href='signin.php'">Continue</button>
        </div>
    </div>
</body>
</html>