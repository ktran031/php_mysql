<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Functions</title>
</head>
<body>

<?php

$color = array("red", "green", "blue");
// array_pop remove last item
array_pop ($color);
print_r($color);
echo "<br>";
array_push($color, "black", "white", "pink");
print_r($color);

echo "<br>";

$numbers = array(13, 4,54, 6, 89, 100, 15, 12, 789, 1000, 12);
echo "Total Array Count: " . count($numbers);
echo "<br>";

echo "Max: " .  max($numbers);
echo "<br>";

echo "Min: " . min($numbers);
echo "<br>";

echo "Do we have a '12' in our array? " . in_array(12, $numbers);
echo "<br>";

echo sort($numbers) . '<br>';
echo print_r($numbers) . '<br>';
echo rsort($numbers) . '<br>';
echo print_r($numbers) . '<br>';

// The implode() function returns a string from the elements of an array
echo "Implode: " . "<br>";
$quote = array("Never", "Give", "Up", "In", "Life");
echo implode(" ", $quote) . "<br>";

// The explode() function breaks a string into an array
echo "Explode: " . "<br>";
$exQuote = "Never Give Up In Life";
print_r(explode(" ", $exQuote));
?>

</body>
</html>