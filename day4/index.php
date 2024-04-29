<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-5">Day 4</h1>
    <h1>
    <?php 
        // $name = "Salman Mallah";
        // echo "string length: " . strlen($name);
        // echo "<br>";
        // echo "total word count: " . str_word_count($name);

        // // convert string into upper case
        // echo "<br>";
        // echo strtoupper($name);
        // // echo $name;
        // // echo strtoupper($name);
        // echo "<br>";
        // echo strtolower($name);

        
            // join strings
            // $first_name = "salman";
            // $last_name = " mallah";

            // $full_name = $first_name . $last_name;
            // echo $full_name;


            // slicing 
            $message = "SalmanMallah";
            echo substr($message, 3, 3);
            echo strrev($message);

    ?>
    </h1>
</body>
</html>