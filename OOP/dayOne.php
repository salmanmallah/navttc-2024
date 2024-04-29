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