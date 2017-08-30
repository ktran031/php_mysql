<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Branching</title>
</head>
<body>

<?php

$names = array("khoi", "tuan", "david", "mikey", "chris", "dice", "kaila", "kim", "james", "jose");

for ($i = 0; $i <= 9; $i++){
    if ($names[$i] == "mikey") {
        //show the data before the name mikey
//        break;
        //show the data for everything except mikey
        continue;
    }
    echo $names[$i]."<br>";
}


?>

</body>
</html>