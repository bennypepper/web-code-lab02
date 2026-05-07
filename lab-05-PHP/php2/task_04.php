<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 04 - Array Multidimensional</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-container w3-margin">
    <h2>Task 04. Array Multidimensional</h2>
    <table class="w3-table-all w3-hoverable w3-border">
        <tr class="w3-light-grey">
            <th>No</th>
            <th>Merk</th>
            <th>In Stock</th>
            <th>Sold</th>
        </tr>
        <?php
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );
        for ($x = 0; $x < count($cars); $x++) {
            echo "<tr>";
            echo "<td>" . ($x + 1) . "</td>";
            echo "<td>" . $cars[$x][0] . "</td>";
            echo "<td>" . $cars[$x][1] . "</td>";
            echo "<td>" . $cars[$x][2] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>