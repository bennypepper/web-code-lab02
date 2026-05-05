<!DOCTYPE html>
<html>
<head>
    <title>Task 04 - Form Input 2</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="inter.css">
</head>
<body style="background:#EAE0CF; font-family:'Inter', sans-serif;">

<div class="w3-container w3-padding-32" style="max-width:600px; margin:auto;">
    <h3 style="color:#213448;">Task 04 - Form Input 2</h3>

    <div class="w3-card w3-padding" style="background:#fff; border-top:4px solid #213448;">
        <form method="POST">
            <label><b>Name</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="name" placeholder="put your name here ..">

            <p><b>Food &amp; Beverages</b></p>
            <label class="w3-block"><input type="checkbox" name="food[]" value="50000"> Pizza @50K</label>
            <label class="w3-block"><input type="checkbox" name="food[]" value="40000"> Burger @40K</label>
            <label class="w3-block w3-margin-bottom"><input type="checkbox" name="food[]" value="20000"> Potato Chips @20K</label>

            <p><b>Payment Type</b></p>
            <label class="w3-block"><input type="radio" name="payment" value="cash"> Cash</label>
            <label class="w3-block w3-margin-bottom"><input type="radio" name="payment" value="debit card"> Debit Card</label>

            <button class="w3-button w3-block" style="background:#213448; color:#EAE0CF;" type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name    = $_POST['name'];
            $foods   = $_POST['food'] ?? [];
            $payment = $_POST['payment'] ?? '';
            $total   = array_sum($foods);
            echo "<p class='w3-padding' style='margin-top:12px;'>hello, <b>$name</b>, Your Total Order Rp. " . number_format($total, 0, ',', '.') . ",- ($payment)</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
