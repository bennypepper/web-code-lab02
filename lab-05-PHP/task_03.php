<!DOCTYPE html>
<html>
<head>
    <title>Task 03 - Form Input Alert</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="inter.css">
</head>
<body style="background:#EAE0CF; font-family:'Inter', sans-serif;">

<div class="w3-container w3-padding-32" style="max-width:600px; margin:auto;">
    <h3 style="color:#213448;">Task 03 - Form Input Alert</h3>

    <div class="w3-card w3-padding" style="background:#fff; border-top:4px solid #213448;">
        <form method="POST">
            <label><b>Name</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="name" placeholder="Put your Name here ..">

            <label><b>Study Program</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="study_program" placeholder="Put your Study Program here ..">

            <button class="w3-button w3-block" style="background:#213448; color:#EAE0CF;" type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $prodi = trim($_POST['study_program']);

            if (empty($name) || empty($prodi)) {
                echo "<div class='w3-panel w3-pale-red w3-leftbar w3-border-red w3-margin-top'>
                        <p>You need to complete all the input before submit !</p>
                      </div>";
            } else {
                echo "<p class='w3-padding' style='margin-top:12px;'>hello, <b>$name</b>, You are from <b>$prodi</b></p>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
