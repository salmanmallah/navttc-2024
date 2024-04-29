<?php
    include 'header.php';
    include 'db_config.php';

?>
<div id="main-content">

<form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Search by name: </label>
            <input type="text" name="name" />
        </div>
        <input class="submit" type="submit" name="search_btn" value="Show" />
    </form>
    
    <?php 
    if (isset($_POST['search_btn'])){
       echo  $name = $_POST['name'];
        
        ?>

    <h2>All Records</h2>
 

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <!-- php code to retrieve code from databse. -->

            <?php 
                $search_term = $_POST['name'];
                $sql = "SELECT * FROM table_info WHERE name LIKE '%$search_term%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row

                $counter = 1;
                while($row = $result->fetch_assoc()) {?>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['class']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td>
                            <a href='edit.php?id=<?php echo $row["id"] ;?>'>Edit</a>
                            <a href='delete.php?id=<?php echo $row["id"] ;?>'>Delete</a>
                        </td>
                    </tr>

                    <?php   
                    $counter += 1;
                }
                } else {
                echo "$name not found";
                }
                $conn->close();
            
            ?>
            
           
        </tbody>
    </table>

           <?php
    }
    ?>
</div>
</div>
</body>
</html>
