<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <center><h1>OOP DAY 2: task: 3</h1></center>

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

</body>
</html>