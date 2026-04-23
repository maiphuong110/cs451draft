<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang PHP Test</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f4;}
        .box { background: white; padding: 20px; border-radius: 8px; display: inline-block; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="box">
        <h2>Kiểm tra hoạt động của PHP</h2>
        <?php
            $current_time = date("d/m/Y H:i:s");
            echo "<p>Xin chào! Code PHP đang hoạt động tốt.</p>";
            echo "<p>Thời gian hiện tại trên server là: <strong>$current_time</strong></p>";
        ?>
        <br>
        <a href="index.html">Quay lại trang chủ</a>
    </div>
</body>
</html>
