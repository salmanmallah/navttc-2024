<?php

class calculation {
    public $x, $y, $z;
    
    function sum() {
        $this->x = $this->y + $this->z;
        return $this->x;
    }

    function sub() {
        $this->x = $this->y - $this->z;
        return $this->x;
    }

    function product() {
        $this->x = $this->y * $this->z;
        return $this->x;
    }
}

// Creating class objects
$obj_one = new calculation();
$obj_two = new calculation();

// Setting values of class properties for object one
$obj_one->y = 25;
$obj_one->z = 5;

// Printing results for object one
echo "Object One Results:<br>";
echo "Sum: " . $obj_one->sum() . '<br>';
echo "Subtraction: " . $obj_one->sub() . '<br>';
echo "Product: " . $obj_one->product() . '<br>';

echo '<br>';

// Setting values of class properties for object two
$obj_two->y = 500;
$obj_two->z = 250;

// Printing results for object two
echo "Object Two Results:<br>";
echo "Subtraction: " . $obj_two->sub() . '<br>';
echo "Sum: " . $obj_two->sum() . '<br>';
echo "Product: " . $obj_two->product() . '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OOP CLASS</h1>







    <?php

        
        abstract class Person
        {
            abstract public function greet();
        }

        class English extends Person
        {
            public function greet()
            {
                return 'Hello!';
            }
        }

        class German extends Person
        {
            public function greet()
            {
                return 'Hallo!';
            }
        }

        class French extends Person
        {
            public function greet()
            {
                return 'Bonjour!';
            }
        }



        function greeting($people)
        {
            foreach ($people as $person) {
                echo $person->greet() . '<br>';
            }
        }




        $people = [
            new English(),
            new German(),
            new French()
        ];

        greeting($people);
    ?>



    <!-- <?php 

        class a {
            protected $name = "salman";
            function fun1(){
                echo "I am Class a";
            }
        }

        class b extends a{
            function fun2(){
                echo $name;
                echo parent::fun1();
                echo "<br>" . "I am class b"; 
            }
        }


        $obj = new b();

        $obj->fun2();
       
    ?> -->

    <?php

        // // defining class
        // class Fruit{
        //     // properties | attributes
        //     public $name;
        //     public $color;

        //     // method 
        //     function set_name($name){
        //         $this->name = $name;

        //     }
        //     function get_name(){
        //         return $this->name;
        //     }
        // }

        // // now creating the objects of class
        // $apple_obj = new Fruit();
        // $mango_obj = new Fruit();
        // $kela_obj = new Fruit();

        // // setting value on abjects
        // $apple_obj->set_name("Apple");
        // $mango_obj->set_name("Mango");
        // $kela_obj->set_name("Bananaa");


        // // Printing the values of objects
        // echo $apple_obj->get_name();
        // echo "<br>";
        // echo $mango_obj->get_name();
        // echo "<br>";
        // echo $kela_obj->get_name();
        // echo "<br>";


    
    ?>
</body>
</html>