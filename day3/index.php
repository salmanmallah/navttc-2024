<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-5">Day 3</h1>
    <div class="container">
        <!-- <div class="row mt-5">
            <div class="col">
                <h2 class="">For Loop</h2>
                <?php 
                    for($index = 1; $index <= 50; $index++){
                        echo "$index . <br>";
                    }
                ?>
            </div> 
            <div class="col">
                <h2 class="">Reversed Loop</h2>
                <?php 
                    for($index = 50; $index >= 1; $index--){
                        echo "$index . <br>";
                    }
                ?>
            </div>
        </div> -->



        <?php
            $cars = array("mehran", "cultus", "corola");
            // echo var_dump($cars);
            foreach ($cars as $item){
                echo $item . "<br>";
            }

            echo "<hr>";
            
            // inserting one item in the last
            array_push($cars, "Salman");

            echo "<h1>accessing array items</h1>";
            for ($index = 0; $index < count($cars); $index++){
                echo $cars[$index] . "<br>";
            }

            echo "<hr>";
            // echo $cars;
            // print_r($cars);

            // echo "<hr>";
            
            echo "<h1>associative array</h1>";

            $cars = array("user_name" => "salman", "user_email" =>"salman@gmail.com", "phone" => "03002368652");
            // echo $cars["key1"] ;
            foreach($cars as $value => $key){
                echo $value . " : " . $key . "<br>";
            }

            echo "<hr>";
            echo "<h1>remove items from array:</h1>";
            
            $fruits = array("Apple", "banana", "cherry");   
            array_push($fruits, "orange", "kiwi", "lemon");

            foreach($fruits as $item){
                echo $item . "<br>";
            }
            // array_splice($fruits, 1, 1);
            // array_splice($fruits, 3, 1);

            // echo "<hr>";

            // foreach($fruits as $item){
            //     echo $item . "<br>";
            // }

            echo "<hr>";
            // removing multiple items from array
            $remove_items = array("banana", "kiwi");
            
            $filtered_fruits = array_diff($fruits, $remove_items);

            foreach($filtered_fruits as $item){
                echo $item . "<br>";
            }

            var_dump($filtered_fruits);

            echo "<hr>";
            $cars = array(
                array("volvo", "22" , "23"),
                array("car", "32" , "23"),
                array("mehran", "20" , "23")
            );

            // echo $cars[2 ][0];
            array_shift($cars);
            // print_r($cars);
            // echo $cars[2][0];
            foreach ($cars as $key) {
                foreach ($key as $item){
                    echo $item . "<br>";
                }
            }
        ?>
    </div>
</body>
</html> 