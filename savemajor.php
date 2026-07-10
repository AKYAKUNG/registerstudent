<?php
require_once 'connectdb.php';

$major_id = mysqli_real_escape_string($conn, $_POST['major_id']);
$major_name = mysqli_real_escape_string($conn, $_POST['major_name']);

// -- ตรวจสอบรหัสซ้ำ --

$sqlcheck = "SELECT major_id FROM tbl_major WHERE major_id = '$major_id'";
$resultcheck = mysqli_query($conn, $sqlcheck) or die("sql ผิด");
$count = mysqli_num_rows($resultcheck);
if ($count > 0) {
    echo "<script>";
    echo "alert('รหัส $major_id นี้มีอยู่ในระบบแล้ว');";
    echo "history.back();";
    echo "</script>";
} else {
    $sqlsave = "INSERT INTO tbl_major(major_id, major_name) VALUES ('$major_id', '$major_name')";
    $resultsave = mysqli_query($conn, $sqlsave) or die("เกิดข้อผิดพลาด");
    mysqli_close($conn);
    echo "<script>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location.href='addmajor.php'";
    echo "</script>";
    
}
?>