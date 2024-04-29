<?php
    include 'db_config.php';

    // getting form data from add.php
    $name  = $_POST['name'];
    $address  = $_POST['address'];
    $class = $_POST['class'];
    $phone  = $_POST['phone'];

    // checking that all values being fetched!
    // echo $name;
    // echo $address;
    // echo $class;
    // echo $phone;
    
    

    // inserting the values  formm.
    $sql = "INSERT INTO table_info (name, address, class, phone)
    VALUES ('$name', '$address', '$class', '$phone')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("LOCATION: index.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();


?>