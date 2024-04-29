<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="insert.php" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address"  required/>
        </div>
         <div class="form-group">
            <label>class</label>
            <input type="text" name="class" />
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</body>
</html>
