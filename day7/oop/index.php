<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

    <?php

        class MyCar{
            public $model;
            public $color;
            public $max_speed;
        
            
        } // end of car class.

        $CarOneObj = new MyCar();
        
        $CarOneObj->$model = "Tarzan";
        $CarOneObj->$color = "purple";
        $CarOneObj->$max_speed = 400;
        


        echo $CarOneObj->$model;

































    
    ?>


    </h1>
</body>
</html>
