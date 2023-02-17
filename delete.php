<?php include 'header.php';

    if(isset($_POST['deletebtn'])){
        $db_host = "localhost:3307";
        $db_user = "root";
        $db_password = "";
        $db_name = "crud";

        echo $student_id = $_POST['sid'];

        $conn = mysqli_connect($db_host,$db_user,$db_password, $db_name) or die("database is not connected");

        $sql = "DELETE FROM students WHERE sid = '{$student_id}'";

        $result = mysqli_query($conn, $sql) or die ("Unsuccessfull");

        header("Location: http://localhost/crud/index.php");

        mysqli_close($conn);
    }

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
