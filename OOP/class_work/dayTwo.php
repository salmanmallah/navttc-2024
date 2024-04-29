<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <center><h1>OOP DAY 2</h1></center>

    <?php 

            class StudentInformation{
                
                // attributes
                public $name;
                public $roll;
                public $email;  
                public $batch;
                
                // constructor
                function __construct($name, $roll, $email, $batch){
                    $this->name = $name;
                    $this->roll = $roll;
                    $this->email = $email;
                    $this->batch = $batch;
                }

                 // setter
                function set_name($name){
                    $this->name = $name;
                }
                
                function set_roll($roll){
                    $this->roll = $roll;
                }
                
                function set_email($email){
                    $this->email = $email;
                }

                function set_batch($batch){
                    $this->batch = $batch;
                }

                function Studentinfo(){
                    echo "Name:      $this->name"  . "<br>";
                    echo "Roll:      $this->roll"  . "<br>";
                    echo "Email:     $this->email" . "<br>";
                    echo "Batch:     $this->batch" . "<br><br><br>";
                }
            }

            $student_one_obj = new StudentInformation("Salman", "22BSCYS021", "SalmanMallah@gmail.com", "2022");
            $student_two_obj = new StudentInformation("Rehman", "22BSCYS041", "Rehman@gmail.com", "1992");
            $student_one_obj->Studentinfo();

            $student_two_obj->Studentinfo();

            $student_two_obj->set_name("Rehman Ali");
            $student_two_obj->Studentinfo();
    ?>  














    <hr>


    <?php

        class ToDo{
            public $arr = array();

            function add_task($task){
                // echo $task;
                array_push($this->arr, $task);
                // print_r($this->arr);
                echo "task added: $task" . "<br>";
            }


            function show_task(){

                echo "<h3>You tasks are: </h3>";

                // displaying the task.
                $counter = 0;
                foreach($this->arr as $task){
                    echo $counter . "." . $task . "<br>";
                    $counter ++;
                }
            }


            function remove_task($index){
                // removing task 
                array_splice($this->arr, $index, $index);
            }
        }


        $todo_obj = new ToDo();

        $todo_obj->add_task("do project assignment");
        $todo_obj->add_task("do reading");
        $todo_obj->add_task("workout");
        $todo_obj->add_task("write a book on python");

        $todo_obj->show_task();
        $todo_obj->remove_task(0);
        


        //  task one and two

        // class Math{

        //     function table($int){
        //         for ($i = 1; $i <= 10; $i++){
        //             echo "$int X " . $i . " = " . $int * $i . "<br>";
        //         }
        //     }

        //     function add_two($num_one, $num_two){
        //         echo $num_one + $num_two . "<br>";
        //     }

        //     function sub_two($num_one, $num_two){
        //         echo $num_one - $num_two . "<br>";
        //     }

        //     function product_two($num_one, $num_two){
        //         echo $num_one * $num_two . "<br>";
        //     }

        //     function div_two($num_one, $num_two){
        //         echo $num_one / $num_two . "<br>";
        //     }

        //     function c_to_f($celcius){
        //             echo "$celcius to fehrenheit:" . (9/5)* $celcius + 32 . "<br>";
        //     }

        // }


        // $table_obj =  new Math();

        // $table_obj->table(10);
        // $table_obj->add_two(10, 30);
        // $table_obj->c_to_f(10);




        
    
    ?>
</body>
</html>