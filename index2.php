<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$discriminant = $b * $b - 4 * $a * $c;

echo "<h1>The answer is: $discriminant</h1>";
?>
</body>
</html>
