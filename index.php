<?php
$items = 15;
$cost = 6;
$subtotal = $cost * $items;
$tax = ($subtotal/100) * 20;
$total = $subtotal + $tax;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arithmetic Operators</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Items:<?= $items ?></p>
    <p>Cost per pack:<?= $cost ?></p>
    <p>Subtotal:<?= $subtotal ?></p>
    <p>Tax:<?= $tax ?></p>
    <p>Total:<?= $total ?></p>

</body>
</html>