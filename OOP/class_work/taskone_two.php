<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <center><h1>OOP DAY 2: task: 1</h1></center>

    <?php

        class Math{

            function table($int){
                for ($i = 1; $i <= 10; $i++){
                    echo "$int X " . $i . " = " . $int * $i . "<br>";
                }
            }

            function add_two($num_one, $num_two){
                echo $num_one + $num_two . "<br>";
            }

            function sub_two($num_one, $num_two){
                echo $num_one - $num_two . "<br>";
            }

            function product_two($num_one, $num_two){
                echo $num_one * $num_two . "<br>";
            }

            function div_two($num_one, $num_two){
                echo $num_one / $num_two . "<br>";
            }

            function c_to_f($celcius){
                    echo "$celcius to fehrenheit:" . (9/5)* $celcius + 32 . "<br>";
            }

        }


        $table_obj =  new Math();

        $table_obj->table(10);
        $table_obj->add_two(10, 30);
        $table_obj->c_to_f(10);

    
    ?>
</body>
</html>