<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Each Loops</title>
</head>
<body>

<?php

$numbers = array(13, 4,54, 6, 89, 100, 15, 12, 789, 1000, 12);

echo "This is the array <pre>";
echo print_r($numbers);
echo "</pre><hr> Populating the array using foreach loop........" . "<br>";

foreach ($numbers as $num) {
    echo "Numbers: {$num} <br>";
}

echo "<hr>";

$food = array(
    "item_number"   => 1050,
    "name"          => "Pizza",
    "region"        => "Italy",
    "Side_food"     => "Pasta",
    "drink"         => "Coke",
    "package_price" => 12000
);

echo "This is the associative array <pre>";
echo print_r($food);
echo "</pre><hr> Populating the associative array using foreach loop........" . "<br>";

// foreach loop for associative arrays
foreach ($food as $key => $value) {
    $data = ucwords(str_replace("_", " ",$key));

    if ($key == "package_price") {
        if(is_numeric($value)) {
            $value = "$" . $value;
        } else {
            $value = "Can not be determined";
        }
    }

    echo "{$data}: {$value}" . "<br>";
}

?>

</body>
</html>