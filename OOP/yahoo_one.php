<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        class calculation{
            public $a, $b, $c;

            function sum(){
                $this->c = $this->a + $this->b;
                return $this->c;
            }
            
            function sub(){
                $this->c = $this->a - $this->b;
                return $this->c;
            }
            
            function mul(){
                $this->c = $this->a * $this->b;
                return $this->c;
            }

            
            function div(){
                $this->c = $this->a / $this->b;
                return $this->c;
            }
        }


        $obj = new calculation();

        $obj->a= 10;
        $obj->b= 10;

        $obj->a= 10;
        echo $obj->sum();
        echo "<br>";
        echo $obj->sub();
    
    ?>
</body>
</html>