<?php
include ("functionFile.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reusability</title>
</head>
<body>

<?php

addition(20,20);

echo "<hr>";

$total = additionReturn(50,50);
$total1 = additionReturn($total,50);
echo $total1;

?>

</body>
</html>