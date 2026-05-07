<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 07 - Detail User</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-container w3-margin w3-light-grey">
    <h2>Detail User</h2>
    <?php
    $data = array(
        array("Mark Zuckerberg", "Boss of All Boss", "https://www.w3schools.com/w3css/img_avatar1.png"),
        array("Sundar Pichai", "The Judge", "https://www.w3schools.com/w3css/img_avatar2.png"),
        array("Andy Jassy", "The Manager", "https://www.w3schools.com/w3css/img_avatar3.png"),
        array("Satya Nadella", "Secretary", "https://www.w3schools.com/w3css/img_avatar4.png"),
        array("Tim Cook", "Staff IT", "https://www.w3schools.com/w3css/img_avatar5.png")
    );
    if(isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if($id >= 0 && $id < count($data)) {
            echo '<div class="w3-card-4 w3-white w3-center" style="max-width:400px; margin: auto;">';
            echo '<img src="' . $data[$id][2] . '" alt="' . $data[$id][0] . '" style="width:100%">';
            echo '<div class="w3-container w3-padding">';
            echo '<h3>' . $data[$id][0] . '</h3>';
            echo '<p>' . $data[$id][1] . '</p>';
            echo '<a href="task_07.php" class="w3-button w3-dark-grey w3-round">Back to List</a>';
            echo '</div>';
            echo '</div>';
        } else {
            echo "<p>User not found.</p>";
            echo '<a href="task_07.php" class="w3-button w3-dark-grey w3-round">Back to List</a>';
        }
    } else {
        echo "<p>No user selected.</p>";
        echo '<a href="task_07.php" class="w3-button w3-dark-grey w3-round">Back to List</a>';
    }
    ?>
</body>
</html>