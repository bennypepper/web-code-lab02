<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: task_09.php");
    exit();
}
$error = '';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username === 'admin' && $password === 'admin123') {
        $_SESSION['username'] = $username;
        header("Location: task_09.php");
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 09 - Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">
    <div class="w3-container w3-margin" style="max-width: 400px; margin: 100px auto !important;">
        <div class="w3-card-4 w3-white">
            <header class="w3-container w3-blue">
                <h2>Login</h2>
            </header>
            <form class="w3-container w3-padding" method="POST" action="">
                <?php if($error) echo "<p class='w3-text-red'>$error</p>"; ?>
                <label><b>Username</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" name="username" required>
                <label><b>Password</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="password" name="password" required>
                <button class="w3-button w3-blue w3-block w3-section w3-padding" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>