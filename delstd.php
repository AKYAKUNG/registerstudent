<?php
    require_once "connectdb.php";

    $std_id = $_GET["std_di"];
    $sqldel = "DELETE FROM tbl_student WHERE std_di = $std_id";

    $result = mysqli_query($conn, $sqldel) or die('sql ผิด');
    echo "<script>";
    echo "alert('ลบข้อมูลสำเร็จ');";
    echo "window.location.href='searchstd.php';";
    echo "</script>";
exit();

?>