<?php
    require_once 'connectdb.php';

    $std_id = mysqli_real_escape_string($conn, $_POST['std_id']);
    $std_name = mysqli_real_escape_string($conn, $_POST['std_name']);
    $std_address = mysqli_real_escape_string($conn, $_POST['std_address']);
    $std_birth = mysqli_real_escape_string($conn, $_POST['std_birth']);
    $std_gender = mysqli_real_escape_string($conn, $_POST['std_gender']);
    $major_id = mysqli_real_escape_string($conn, $_POST['major_id']);

    $sqlupdate = "UPDATE tbl_student SET std_name = '$std_name', std_address = '$std_address', std_birth = '$std_birth', std_gender = '$std_gender', major_id = '$major_id' WHERE std_di = '$std_id'";

    $result = mysqli_query($conn, $sqlupdate) or die('sql ผิด');
    echo "<script>";
    echo "alert('แก้ไขข้อมูลสำเร็จ');";
    echo "window.location.href='searchstd.php';";
    echo "</script>";
?>
