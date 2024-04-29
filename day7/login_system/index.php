
<?php
    if (isset($_POST["signup_submit"])){
        $sign_up_email = $_POST["signup_email"];
        $sign_up_password = $_POST["signup_password"];
        // echo ""

        global $sign_up_email;
        global $sign_up_password;

        // echo $sign_up_email;
        // echo $sign_up_password;

        $myfile = fopen("user_record.csv", "a");
        fwrite($myfile, "$sign_up_email,$sign_up_password \n");
        fclose($myfile);
    ?>
    <div class="container mt-5">

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sign up Successfull!!!</strong> you can login noww!!!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <?php 
    } // end of signup code


    // start of signin code
    if(isset($_POST["signin_submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $read_file  = file("user_record.csv");
        $counter = 1;
        foreach ($read_file as $line){
            // echo $line;
            $arr = explode(",", $line);
            // echo $user_email;
            // echo $user_pass;
            // var_dump($arr);

            // now checking the values of the user credentials
            if($email == $arr[0] && $password == $arr[1]){
                ?>

                <div class="container mt-5">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Login Successfull!!!!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>

                <?php
            }else{
                ?>
                    <div class="container mt-5">
                    <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                        <strong>Login Failed!!!!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            <?php
            }
        }
    }

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body class="">
    <div class="container">
        <form action="" method="POST" class="form-group p-5">
            <h1 class="text-center">SignUp</h1>
            <label for="email">Email</label>
            <input type="email" id="email" name="signup_email" class="form-control">
            <label for="password">passwor</label>
            <input type="password" id="password" name="signup_password" class="form-control">

            <input type="submit" name="signup_submit" class="mt-3 btn btn-primary">
        </form>
    </div>   
    <hr>
    <div class="container">
        <form action="" method="POST" class="form-group p-5">
            <h1 class="text-center">Login</h1>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">

            <input type="submit" name="signin_submit" class="mt-3 btn btn-primary">
        </form>
    </div>   
    
    
        <!-- bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>