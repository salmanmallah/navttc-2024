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

    ?>
</body>
</html>