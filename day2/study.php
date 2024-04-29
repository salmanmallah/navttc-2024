<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> while loop:</h1>    
<?php
$num = 10;
while ($num < 20){
    echo $num . "<br>";
    $num += 2;
}

echo "<hr>";
echo "<h1>For loop:</h1>";
$number_of_table = 5;
for ($i = 1; $i<=10; $i++){
    echo $number_of_table ." X " . $i . " = " . $number_of_table*$i;
    echo "<br>";
    
}


echo "<hr>";
echo "<h1>for each loops</h1>";


$arr = array("red", "green", "blue", "purple");
foreach ($arr as $element) {
    echo $element. "<br>";
}


?>



</body>
</html>