<?php
$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Licorice', 'Bubble gum', 'Toffee', 'Jelly beans'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Updating Variables</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <ul>
        <li><?php echo $best_sellers[0]; ?></li>
        <li><?php echo $best_sellers[1]; ?></li>
        <li><?php echo $best_sellers[2]; ?></li>
        <li><?php echo $best_sellers[3]; ?></li>
        <li><?php echo $best_sellers[4]; ?></li>
    </ul>
</body>
</html>