<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 07 - Dashboard</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-container w3-margin">
    <h2>Task 07. Users List</h2>
    <table class="w3-table-all w3-hoverable w3-border">
        <tr class="w3-light-grey">
            <th>No</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Avatar</th>
            <th>Action</th>
        </tr>
        <?php
        $data = array(
            array("Mark Zuckerberg", "Boss of All Boss", "img_avatar1.png"),
            array("Sundar Pichai", "The Judge", "img_avatar2.png"),
            array("Andy Jassy", "The Manager", "img_avatar3.png"),
            array("Satya Nadella", "Secretary", "img_avatar4.png"),
            array("Tim Cook", "Staff IT", "img_avatar5.png")
        );
        for ($x = 0; $x < count($data); $x++) {
            echo "<tr>";
            echo "<td>" . ($x + 1) . "</td>";
            echo "<td>" . $data[$x][0] . "</td>";
            echo "<td>" . $data[$x][1] . "</td>";
            echo "<td>" . $data[$x][2] . "</td>";
            echo "<td><a href='task_07_detail.php?id=" . $x . "' class='w3-button w3-blue w3-round'>🔎 Detail</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>