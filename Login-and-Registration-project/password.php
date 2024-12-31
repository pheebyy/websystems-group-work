<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Forgot Password</title>
</head>
<body>
    <form action="password.php" method="POST">
        <h2>Forgot Password</h2>
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit" name="reset">Reset Password</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['reset'])) {
    require 'db.php';

    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Password reset instructions sent to $email (simulated).";
    } else {
        echo "Email not found.";
    }
}
?>
