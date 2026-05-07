<!DOCTYPE html>
<html>
<head>
    <title>Task1Action</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="inter.css">
</head>
<body style="background:#EAE0CF; font-family:'Inter', sans-serif;">

<div class="w3-container w3-padding-32" style="max-width:600px; margin:auto;">
    <?php
    $name  = trim($_POST['name'] ?? '');
    $prodi = trim($_POST['study_program'] ?? '');

    if (empty($name) || empty($prodi)) {
        echo "<div class='w3-panel w3-pale-red w3-leftbar w3-border-red'>
                <p>You need to complete all the input before submit !</p>
              </div>";
    } else {
        echo "<p>hello, <b>$name</b>, You are from <b>$prodi</b></p>";
    }
    ?>
    <a href="task_05.php" style="color:#547792;">&#8592; Back</a>
</div>

</body>
</html>
