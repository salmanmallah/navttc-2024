<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <?php
        // Check if $_GET["name"] and $_GET["email"] are set before accessing them
        if (isset($_GET["name"]) && isset($_GET["email"])) {
            echo "<h1>Welcome " . $_GET["name"] . "</h1>";
            echo "<h1>you are having email:  " . $_GET["email"] . "</h1>";
        } else {
            // Handle case where $_GET["name"] or $_GET["email"] is not set
            echo "<h1>Welcome</h1>";
            echo "<p>Please provide your name and email</p>";
        }
        ?>

<div class="container mt-5">
        <form action="index.php" class="form-group" method="GET">
            <label for="name_input" class="">Name</label>
            <input type="text" id="name_input" name="name" class="form-control">

            <label for="email_input" for="email_input">email</label>
            <input type="email" id="email_input" name="email" class="form-control">

            <input type="submit" class="btn btn-primary mt-3">
        </form>
    </div>

<!--     
<h1>Welcome <?php echo $_GET["name"]; ?></h1>
<h1>you are having email:  <?php echo $_GET["email"]; ?></h1> -->



    <!-- <h1>Welcome <?php echo $_POST["name"]; ?></h1>
    <h1>you are having email:  <?php echo $_POST["email"]; ?></h1> -->
</body>
</html>