<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 01 - Array</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-container w3-margin">
    <h2>Task 01. Array</h2>
    <?php
    $characters = array(
        "Mark Zuckerberg",
        "Tim Cook",
        "Sundar Pichai",
        "Satya Nadella",
        "Elon Musk",
        "Jensen Huang",
        "Andy Jassy"
    );

    echo "<ul class='w3-ul w3-border w3-hoverable'>";
    echo "<li>" . $characters[0] . "</li>";
    echo "<li>" . $characters[1] . "</li>";
    echo "<li>" . $characters[2] . "</li>";
    echo "<li>" . $characters[3] . "</li>";
    echo "<li>" . $characters[4] . "</li>";
    echo "<li>" . $characters[5] . "</li>";
    echo "<li>" . $characters[6] . "</li>";
    echo "</ul>";
    ?>
</body>
</html>