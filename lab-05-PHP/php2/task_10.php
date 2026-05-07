<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 10 - Basic Report</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        @media print {
            .no-print, .no-print * {
                display: none !important;
            }
        }
    </style>
</head>
<body class="w3-container w3-margin">
    <div class="w3-row w3-margin-bottom no-print">
        <button onclick="window.print()" class="w3-button w3-green w3-right">🖨️ Print Report</button>
    </div>
    <div class="w3-center">
        <h2>Laporan Data Karakter</h2>
        <p>Bulan: Oktober 2026</p>
    </div>
    <hr>
    <table class="w3-table-all w3-border">
        <tr class="w3-light-grey">
            <th>No</th>
            <th>Name</th>
            <th>Role</th>
        </tr>
        <?php
        $data = array(
            array("Mark Zuckerberg", "Boss of All Boss"),
            array("Sundar Pichai", "The Judge"),
            array("Andy Jassy", "The Manager"),
            array("Satya Nadella", "Secretary"),
            array("Tim Cook", "Staff IT")
        );
        for ($x = 0; $x < count($data); $x++) {
            echo "<tr>";
            echo "<td>" . ($x + 1) . "</td>";
            echo "<td>" . $data[$x][0] . "</td>";
            echo "<td>" . $data[$x][1] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>