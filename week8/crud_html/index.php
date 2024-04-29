<?php
    include 'header.php';
    include 'db_config.php';

?>
<div id="main-content">
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
                $sql = "SELECT * from table_info ORDER BY table_info.id DESC" ;
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
                echo "0 results";
                }
                $conn->close();
            
            ?>
            
           
        </tbody>
    </table>
</div>
</div>
</body>
</html>
