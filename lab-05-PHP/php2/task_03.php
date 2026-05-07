<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 03 - Table</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-container w3-margin">
    <h2>Task 03. Table</h2>
    <table class="w3-table-all w3-hoverable w3-border">
        <tr class="w3-light-grey">
            <th>No</th>
            <th>Name</th>
        </tr>
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
        for ($x = 0; $x < count($characters); $x++) {
            echo "<tr>";
            echo "<td>" . ($x + 1) . "</td>";
            echo "<td>" . $characters[$x] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>