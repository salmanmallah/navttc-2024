<?php 
    include 'header.php'; 
    include 'db_config.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        // echo "<br>" . $id;
    }

    if (isset($_POST['name'])){
        // getting update form data
        $form_name = $_POST['name'];
        $form_address =  $_POST['address'];
        $form_class = $_POST['class'];
        $form_phone = $_POST['phone'];
        
        // update query 
        $sql = "UPDATE `table_info` SET `name`='$form_name',`address`='$form_address',`class`='$form_class',`phone`='$form_phone' WHERE table_info.id = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("LOCATION: index.php");
            
        } else {
        echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }


?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="" method="post">

    <?php
                    
            $sql = "SELECT * FROM table_info WHERE table_info.id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // o utput data of each row
            while($row = $result->fetch_assoc()) { ?>

            <div class="form-group">
                <label>Name</label>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                <input type="text" name="name" value="<?php echo $row['name']; ?>"/>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" value="<?php echo $row['address']; ?>"/>
            </div>

            <div class="form-group">
                <label>class</label>
                <input type="text" name="class" value="<?php echo $row['class']; ?>"/>
            </div>
            
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>"/>
            </div>
            <input class="submit" type="submit" value="Update"/>
<?php
                
            }
            } else {
                echo "0 results";
            }
            $conn->close();
    
    ?>
      
    </form>
</div>
</div>
</body>
</html>
