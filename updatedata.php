<?php
    $student_id = $_POST['sid'];
    $student_name = $_POST['sname'];
    $student_address = $_POST['saddress'];
    $student_class = $_POST['sclass'];
    $student_phone = $_POST['sphone'];

    $db_host = "localhost:3307";
    $db_user = "root";
    $db_password = "";
    $db_name = "crud";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    $sql = "UPDATE students set sname = '{$student_name}', saddress =  '{$student_address}', sclass = '{$student_class}', sphone = '{$student_phone}' WHERE sid = '{$student_id}'";

    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/crud/index.php");

    mysqli_close($conn);
?>