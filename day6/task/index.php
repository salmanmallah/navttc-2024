<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Text on Button Click</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #00a2;
  }
  p {
    margin-top: 20px;
    font-size: 18px;
  }
</style>
</head>
<body>

<button id="changeTextButton">Change Text</button>
<p id="messageParagraph">Original Message</p>

<script>
  $(document).ready(function(){
    $("#changeTextButton").click(function(){
      $("#messageParagraph").text("New Message");
    });
  });
</script>


<hr>

<h1>
  task 31 <br>
     <?php 
        
        $number = 7;
        $total = 1;
        for ($i = $number; $i>= 1; $i--){
            $total *= $i;
        }
        echo $total;
        ?>
    
    

<hr>
 task 32 <br>
<?php
        $pattern = "*";
        $lines = 10;
        for ($i=1; $i<=$lines; $i++){
            for($j=1; $j<=$i; $j++){
                echo $pattern;
            }
            echo "<br>";
        }
    ?>


<hr>
 task 33 <br>
    <?php


        $i = 1;
        do{
          echo $i . "<br>";
          $i++;
        }while ($i <= 5);
    
    ?>
<hr>
 task 34 <br>
  <!-- You need to write a program in PHP using for...each 
  loop to remove specific elements by value from an array 
  using PHP program. 
  Hint: 
   Take an array with list of month names. 
   Take a variable with the name of value to be deleted  -->

  <?php

      
      $delete = 1;

      $months = [
        1=> "january",
        2=> "febuary",
        3=> "march",
        4=> "april",
        5=> "may",
        6=> "june",
        7=> "july",
        8=> "august",
        9=> "september",
        10=> "octomber",
        11=> "november",
        12=> "december",
      ];

      unset($months[$delete]);

      foreach($months as $month){
        echo $month . "<br>";
      }


  ?>
<hr>
 task 35 <br>
      <?php
        $months = [
          1=> "january",
          2=> "febuary",
          3=> "march",
          4=> "april",
          5=> "may",
          6=> "june",
          7=> "july",
          8=> "august",
          9=> "september",
          10=> "octomber",
          11=> "november",
          12=> "december",
        ];

        sort($months);

        foreach($months as $month){
          echo $month . "<br>";
        }

      ?>

<hr>
 task 37 <br>
 <!-- Write a PHP function that checks whether a string 
is all 
lowercase. -->

        <?php 
        $name = "SALMAN";
        echo ctype_upper($name);

        ?>
<hr>
 task 38 <br>


 </h1>
</body>
</html>
