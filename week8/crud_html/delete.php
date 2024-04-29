<?php 

    include 'header.php'; 
    include 'db_config.php'


?>
<?php 

    if (isset($_GET['id'])){

        $id = $_GET['id'];

        $sql = "DELETE FROM table_info WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
            header("LOCATION: index.php");
        } else {
        echo "Error deleting record: " . $conn->error;
        }

        $conn->close();


    }




?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
