<?php
$name = "Prashant Acharya";
$favourites = ['Snickers','Chocolate', 'Toffee', 'Fudge'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Echo Shorthand</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favourite type of candy is:
        <?= $favourites[0] ?>.
    </p>
</body>
</html>