<?php
    echo $student_name = $_POST["sname"];
    echo $student_address = $_POST["saddress"];
    echo $student_class = $_POST["sclass"];
    echo $student_phone = $_POST["sphone"];

    $db_host = "localhost:3307";
    $db_user = "root";
    $db_password = "";
    $db_name = "crud";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    $sql = "INSERT INTO students(sname, saddress, sclass, sphone) VALUES ( '{$student_name}','{$student_address}','{$student_class}','{$student_phone}')";

    $result = mysqli_query($conn,$sql);

    header("Location: http://localhost/crud/index.php");

    mysqli_close($conn);
?>