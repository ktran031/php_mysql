<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Statements</title>
</head>
<body>

<?php

$weather = "sa";

switch($weather) {

    case "Sunny":
        echo "Weather is sunny!";
        break;

    case "Rainy":
        echo "Weather is rainy!";
        break;

    default:
        echo "Weather cannot be forecast";
        break;
}

echo "<hr>";

$restricted = 'Pusblic';
switch ($restricted) {
    case 'CEO':
        echo "permission granted";
        break;

    case 'Office Boy':
    case 'Public':
    case ' Media':
        echo 'permission not granted';
        break;

    default:
        echo "See Khoi for more info";
        break;
}

?>

</body>
</html>