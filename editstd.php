<?php
require_once 'connectdb.php';

$std_id = $_GET["std_di"];

// ค้นหาข้อมูล
$sqledit = "SELECT * FROM tbl_student WHERE std_di = '$std_id'";
$result = mysqli_query($conn, $sqledit) or die('sql ผิด');

$rowstd = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาข้อมูลนักศึกษา</title>
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
                <h3>แบบแก้ไขข้อมูลนักศึกษา</h3>
                <form action="ีupdate.php" method="post">
                    <div class="mb-3 mt-3">
                        <label for="std_id" class="form-label">รหัสนักศึกษา:</label>
                        <input type="text" class="form-control" id="std_id" name="std_id" value="<?php echo $rowstd['std_di']; ?>" readonly>
                    </div>
                     <div class="mb-3 mt-3">
                        <label for="std_name" class="form-label">ชื่อนักศึกษา:</label>
                        <input type="text" class="form-control" id="std_name" name="std_name" value="<?php echo $rowstd['std_name']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="std_address" class="form-label">ที่อยู่:</label>
                        <input type="text" class="form-control" id="std_address" name="std_address" value="<?php echo $rowstd['std_address']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="std_birth" class="form-label">วันเกิด:</label>
                        <input type="date" class="form-control" id="std_birth" name="std_birth" value="<?php echo $rowstd['std_birth']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="std_gender" class="form-label">เพศ:</label>
                        <select name="std_gender" id="std_gender" class="form-control">
                            <option value="ชาย" <?php if($rowstd["std_gender"] == 'ชาย') echo "selected";?>>ชาย</option>
                            <option value="หญิง" <?php if($rowstd["std_gender"] == 'หญิง') echo "selected";?>>หญิง</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="major_id" class="form-label">สาขา:</label>
                        <select name="major_id" id="major_id" class="form-control">
                            <?php
                                $sql = "SELECT * FROM tbl_major";
                                $result = mysqli_query($conn,$sql) or die("sql ผิด");
                                while($row = mysqli_fetch_assoc($result)) {
                                    if($row["major_id"] == $rowstd["major_id"]) {
                                        echo "<option value='".$row["major_id"]."' selected>".$row["major_name"]."</option>";
                                    }else{
                                        echo "<option value='".$row["major_id"]."'>".$row["major_name"]."</option>";
                                    }
                                    
                                }
                            ?>
                        </select>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning">แก้ไขข้อมูล</button>
                        <a href="searchstd.php" class="btn btn-danger">ย้อนกลับ</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>