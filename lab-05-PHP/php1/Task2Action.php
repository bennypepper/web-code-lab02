<!DOCTYPE html>
<html>

<head>
    <title>Task2Action - User Information</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="inter.css">
</head>

<body style="background:#EAE0CF; font-family:'Inter', sans-serif;">

    <div class="w3-container w3-padding-32" style="max-width:500px; margin:auto;">
            <?php
            $name = trim($_POST['name'] ?? '');
            $prodi = trim($_POST['study_program'] ?? '');
            ?>

        <div class="w3-card" style="border-top:4px solid #213448;">
            <div class="w3-container w3-padding" style="background:#213448; color:#EAE0CF;">
                <h4>User Information</h4>
            </div>
            <div class="w3-container w3-padding w3-white" style="display:flex; align-items:center; gap:16px;">
                <img src="https://www.w3schools.com/w3css/img_avatar2.png" alt="Avatar"
                    style="width:80px; height:80px; border-radius:50%; border:3px solid #94B4C1;">
                <div>
                    <p><b>Name :</b> <?php echo htmlspecialchars($name); ?></p>
                    <p><b>Major :</b> <?php echo htmlspecialchars($prodi); ?></p>
                </div>
            </div>
            <div class="w3-container w3-center w3-padding" style="background:#547792;">
                <a href="task_06.php" style="color:#EAE0CF; text-decoration:none;">verify</a>
            </div>
        </div>
    </div>

</body>

</html>