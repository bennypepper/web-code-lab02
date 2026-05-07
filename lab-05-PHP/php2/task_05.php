<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 05 - Local Search</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-container w3-margin">
    <h2>Task 05. Local Search (JS)</h2>
    <input class="w3-input w3-border w3-padding w3-margin-bottom" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction()">
    <table class="w3-table-all w3-hoverable w3-border" id="myTable">
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
    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 1; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>
</body>
</html>