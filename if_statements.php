<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Statements</title>
</head>
<body>

<?php

$weather = "Rainsy";

if ($weather == "Sunny") {
    echo "The weather is pleasant";
} elseif ($weather == "Rainy") {
    echo "It's raining";
} elseif ($weather == "Cloudy") {
    echo "It's cloudy";
} else {
    echo "It's hard to forecast weather";
}

?>

</body>
</html>