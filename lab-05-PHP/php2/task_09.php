<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: task_09_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 09 - Dashboard</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-container w3-margin">
    <div class="w3-bar w3-blue">
        <a href="#" class="w3-bar-item w3-button">Dashboard</a>
        <a href="#" class="w3-bar-item w3-button">Characters</a>
        <a href="task_09_logout.php" class="w3-bar-item w3-button w3-right w3-red">Sign Out</a>
    </div>
    <h2>Welcome to Dashboard</h2>
    <p>You are successfully logged in as: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
</body>
</html>