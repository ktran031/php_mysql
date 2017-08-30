<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Define Functions</title>
</head>
<body>

<?php

// passing parameters
function addition($x, $y){
    $result = $x + $y;
    echo "The result is {$result}";
}




// addition using return function
function additionReturn($a, $b) {
    $f = $a + $b;
    return $f;
}




?>

</body>
</html>