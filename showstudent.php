<?php
//1.เชื่อมต่อฐานข้อมูล
require_once 'connectdb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลนักศึกษา</title>
    <link rel="icon" href="favicon.png" type="img/cat.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Prompt&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #000000;
        font-family: "Noto Sans Thai", sans-serif;
        font-optical-sizing: auto;
        color: #ffffff;
    }
</style>

<body>
    <div class="container">
        <h1>ข้อมูลนักศึกษา</h1>
        <?php
        $sql = "SELECT * FROM tbl_student INNER JOIN tbl_major ON tbl_student.major_id = tbl_major.major_id";
        $result = mysqli_query($conn, $sql) or die('sql ผิด');
        $count = mysqli_num_rows($result);
        echo "แสดงข้อมูลนักศึกษา";
        echo "จำนวนนักศึกษา $count คน<br>";
        echo "<hr>";

        echo "<table class='table table-bordered table-striped text-white'>";
        echo "<tr class='table-primary'>";
        echo "<th>รหัสนักศึกษา</th>";
        echo "<th>ชื่อนักศึกษา</th>";
        echo "<th>ที่อยู่</th>";
        echo "<th>วันเกิด</th>";
        echo "<th>เพศ</th>";
        echo "<th>รหัสสาขา</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['std_di']}</td>";
            echo "<td>{$row['std_name']}</td>";
            echo "<td>{$row['std_address']}</td>";
            echo "<td>{$row['std_birth']}</td>";
            echo "<td>{$row['std_gender']}</td>";
            echo "<td>{$row['major_name']}</td>";
            echo "</tr>";
        }

        mysqli_close($conn);
        ?>
        </table>
        <div class="mt-3">
            <a href="index.php" class="btn btn-danger mt-2">ย้อนกลับ</a>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>