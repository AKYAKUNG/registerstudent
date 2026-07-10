<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาข้อมูลนักศึกษา</title>

    <link rel="icon" href="favicon.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0b0f14;
            color: #e6edf3;
            font-family: "Noto Sans Thai", sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .menu-box img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #30363d;
            margin-bottom: 16px;
        }

        .menu-box {
            background-color: #0d1117;
            border-radius: 14px;
            padding: 32px 28px;
            width: 100%;
            max-width: 480px;
        }

        .menu-box img {
            width: 90px;
            margin-bottom: 16px;
        }

        .menu-box h1 {
            font-size: 20px;
            font-weight: 500;
            text-align: center;
            margin-bottom: 28px;
            color: #ffffff;
        }

        .menu-box a {
            width: 100%;
            margin-bottom: 12px;
            padding: 10px 0;
            background-color: transparent;
            border: 1px solid #30363d;
            color: #e6edf3;
            font-weight: 400;
            transition: all 0.2s ease;
        }

        .menu-box a:hover {
            background-color: #1f6feb;
            border-color: #1f6feb;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="menu-box text-center">
        <img src="img/Logo.gif" alt="Logo" class="img-fluid d-block mx-auto">

        <h1>ระบบค้นหาข้อมูลมหาวิทยาลัย</h1>

        <a href="showstudent.php" class="btn">
            แสดงข้อมูลนักศึกษาทั้งหมด
        </a>

        <a href="showmajor.php" class="btn">
            แสดงข้อมูลสาขาทั้งหมด
        </a>

        <a href="searchstd.php" class="btn">
            ค้นหาข้อมูลนักศึกษา
        </a>

        <a href="searchstd2.php" class="btn">
            ค้นหานักศึกษาตามวันเกิด
        </a>

        <a href="searhmajor.php" class="btn">
            ค้นหาข้อมูลสาขา
        </a>

        <a href="addstd.php" class="btn">
            แบบบันทึกข้อมูลนักศึกษา
        </a>
        <a href="addmajor.php" class="btn">
            แบบบันทึกข้อมูลสาขา
        </a>
    </div>
</body>

</html>