<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>
	
<?php 

$color = array(

	"A" => "40",
	"B" => "Pizza",

);

echo $color["A"];

?>	<br />

<?php

$food = array(
        "Asian" => "Pizza",
        "Italian" => "Biryani"
);

echo $food["Asian"]. " is for " . $food["Italian"];;

?>
<pre>
    <?php
        echo print_r($food);
    ?><br />
</pre>

</body>
</html>