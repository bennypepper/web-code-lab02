<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 06 - List of Cards</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-container w3-margin w3-light-grey">
    <h2>Task 06. List Of Cards</h2>
    <div class="w3-row-padding">
        <?php
        $data = array(
            array("Mark Zuckerberg", "Boss of All Boss", "https://www.w3schools.com/w3css/img_avatar1.png"),
            array("Sundar Pichai", "The Judge", "https://www.w3schools.com/w3css/img_avatar2.png"),
            array("Andy Jassy", "The Manager", "https://www.w3schools.com/w3css/img_avatar3.png"),
            array("Satya Nadella", "Secretary", "https://www.w3schools.com/w3css/img_avatar4.png"),
            array("Tim Cook", "Staff IT", "https://www.w3schools.com/w3css/img_avatar5.png")
        );
        for ($x = 0; $x < count($data); $x++) {
            echo '<div class="w3-col s12 m6 l4 w3-margin-bottom">';
            echo '<div class="w3-card w3-white">';
            echo '<img src="' . $data[$x][2] . '" alt="' . $data[$x][0] . '" style="width:100%">';
            echo '<div class="w3-container">';
            echo '<h3>' . $data[$x][0] . '</h3>';
            echo '<p>' . $data[$x][1] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>