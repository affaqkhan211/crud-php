<?php

    echo $student_id = $_GET['id'];

    $db_host = "localhost:3307";
        $db_user = "root";
        $db_password = "";
        $db_name = "crud";

        $conn = mysqli_connect($db_host,$db_user,$db_password, $db_name) or die("database is not connected");

        $sql = "DELETE FROM students WHERE sid = '{$student_id}'";

        $result = mysqli_query($conn, $sql) or die ("Unsuccessfull");

        header("Location: http://localhost/crud/index.php");

        mysqli_close($conn);
?>