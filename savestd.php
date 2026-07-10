<?php
require_once 'connectdb.php';

$std_id = mysqli_real_escape_string($conn, $_POST['std_id']);
$std_name = mysqli_real_escape_string($conn, $_POST['std_name']);
$std_address = mysqli_real_escape_string($conn, $_POST['std_address']);
$std_birth = mysqli_real_escape_string($conn, $_POST['std_birth']);
$std_gender = mysqli_real_escape_string($conn, $_POST['std_gender']);
$major_id = mysqli_real_escape_string($conn, $_POST['major_id']);

// -- ตรวจสอบรหัสซ้ำ --

$sqlcheck = "SELECT std_di FROM tbl_student WHERE std_di = '$std_id'";
$resultcheck = mysqli_query($conn, $sqlcheck) or die("sql ผิด");
$count = mysqli_num_rows($resultcheck);
if ($count > 0) {
    echo "<script>";
    echo "alert('รหัส $std_id นี้มีอยู่ในระบบแล้ว');";
    echo "history.back();";
    echo "</script>";
} else {
    $sqlsave = "INSERT INTO tbl_student(std_di, std_name, std_address, std_birth, std_gender, major_id) VALUES ('$std_id', '$std_name', '$std_address', '$std_birth', '$std_gender', '$major_id')";
    $resultsave = mysqli_query($conn, $sqlsave) or die("เกิดข้อผิดพลาด");
    mysqli_close($conn);
    echo "<script>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location.href='addstd.php'";
    echo "</script>";
    
}
?>