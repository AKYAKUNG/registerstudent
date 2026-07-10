<?php
require_once 'connectdb.php';
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
                <h3>แบบบันทึกสาขา</h3>
                <form action="savemajor.php" method="post">
                    <div class="mb-3 mt-3">
                        <label for="major_id" class="form-label">รหัสนักสาขา:</label>
                        <input type="text" class="form-control" id="major_id" name="major_id" required>
                    </div>
                     <div class="mb-3 mt-3">
                        <label for="major_name" class="form-label">ชื่อสาขา:</label>
                        <input type="text" class="form-control" id="major_name" name="major_name">
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                        <a href="index.php" class="btn btn-danger">ย้อนกลับ</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>