<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="sclass">
                <option value="" selected disabled>Select Class</option>
                <?php 
                $db_host = "localhost:3307";
                $db_user = "root";
                $db_password = "";
                $db_name = "crud";

                $conn = mysqli_connect($db_host,$db_user,$db_password, $db_name) or die("database is not connected");

                $sql = "SELECT * FROM studentclass";

                $result = mysqli_query($conn, $sql) or die ("Unsuccessfull");

                while($row = mysqli_fetch_assoc($result)){

            ?>
                <option value="<?php echo $row["cid"]; ?>"><?php echo $row["cname"] ?></option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
