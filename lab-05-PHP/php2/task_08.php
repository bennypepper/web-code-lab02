<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 08 - Dashboard Model 2</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-hover-blue:hover {background-color:#2196F3!important; color:white!important}
    </style>
</head>
<body class="w3-container w3-margin">
    <h2>Task 08. Users List dengan Avatar dan Hover Biru</h2>
    <table class="w3-table w3-bordered w3-hoverable w3-hover-blue">
        <tr class="w3-light-grey">
            <th>No</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Avatar</th>
            <th>Action</th>
        </tr>
        <?php
        $data = array(
            array("Mark Zuckerberg", "Boss of All Boss", "https://www.w3schools.com/w3css/img_avatar1.png"),
            array("Sundar Pichai", "The Judge", "https://www.w3schools.com/w3css/img_avatar2.png"),
            array("Andy Jassy", "The Manager", "https://www.w3schools.com/w3css/img_avatar3.png"),
            array("Satya Nadella", "Secretary", "https://www.w3schools.com/w3css/img_avatar4.png"),
            array("Tim Cook", "Staff IT", "https://www.w3schools.com/w3css/img_avatar5.png")
        );
        for ($x = 0; $x < count($data); $x++) {
            echo "<tr class='w3-hover-blue w3-transition'>";
            echo "<td><br>" . ($x + 1) . "</td>";
            echo "<td><br>" . $data[$x][0] . "</td>";
            echo "<td><br>" . $data[$x][1] . "</td>";
            echo "<td><img src='" . $data[$x][2] . "' class='w3-circle' style='width:50px'></td>";
            echo "<td><br><a href='task_07_detail.php?id=" . $x . "' class='w3-button w3-white w3-border w3-border-blue w3-round'>🔎 Detail</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>