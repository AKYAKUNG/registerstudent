<?php
//1.เชื่อมต่อฐานข้อมูล
require_once 'connectdb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาข้อมูลสาขา</title>
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
        <div class="row">
            <div class="col-sm-12">
                <h2>ค้นหาข้อมูลสาขา</h2>
                <form action="searhmajor.php" method="post">
                    <label for="search">กรอกรหัสสาขาหรือชื่อสาขา :</label>
                    <input type="text" name="data" id="data" class="form-control">
                    <button type="submit" class="btn btn-primary mt-2">ค้นหา</button>
                    <a href="index.php" class="btn btn-danger mt-2">ย้อนกลับ</a>
                </form>
            </div>
        </div>
        <!--------- แสดงผลลัพธ์การค้นหา ---------->
        <div class="row">
            <div class="col-sm-10">
                <?php
                if (isset($_POST['data'])) {
                    $data = $_POST['data'];
                    echo "<h3 class='mt-4'>ผลลัพธ์การค้นหา : " . $data . "</h3> <br>";
                    $sql = "SELECT * FROM tbl_major WHERE major_id LIKE '%$data%' OR major_name LIKE '%$data%'";
                    $result = mysqli_query($conn, $sql) or die('sql ผิด');
                    //นับจำนวนข้อมูล
                    $count = mysqli_num_rows($result);
                    echo "แสดงข้อมูลสาขา";
                    echo "จำนวนสาขา $count สาขา<br>";
                    echo "<hr>";
                    //4.แปลงข้อมูลเป็น array และแสดงข้อมูลด้วยลูป

                    echo "<table class='table table-bordered table-striped'>";
                    echo "<tr class='table-primary'>";
                    echo "<th>รหัสสาขา</th>";
                    echo "<th>ชื่อสาขา</th>";
                    echo "</tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["major_id"] . "</td>";
                        echo "<td>" . $row["major_name"] . "</td>";
                        echo "</tr>";
                    }

                    //5.ปิดการเชื่อมต่อฐานข้อมูล
                    mysqli_close($conn);
                }
                ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>