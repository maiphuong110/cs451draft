<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Namecard</title>
    <style>
        body { 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            background-color: #f0f2f5; 
            font-family: Arial, sans-serif; 
        }
        .card { 
            background-color: #8c8893; /* Màu xám tím tĩnh lặng */
            color: white; 
            width: 350px; 
            padding: 30px; 
            border-radius: 12px; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            text-align: center;
        }
        .card h2 { 
            margin: 0; 
            font-size: 24px; 
            letter-spacing: 1px;
            text-transform: uppercase; 
        }
        .card p { 
            margin: 8px 0; 
            font-size: 16px;
            font-style: italic; 
            opacity: 0.9;
        }
        .card .gender { 
            font-size: 12px; 
            opacity: 0.8; 
            margin-top: 15px; 
            display: inline-block; 
            border: 1px solid rgba(255,255,255,0.5); 
            padding: 4px 12px; 
            border-radius: 15px;
        }
    </style>
</head>
<body>

    <?php
    // Kiểm tra xem phương thức gửi dữ liệu có phải là POST (từ form truyền sang) không
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Dùng htmlspecialchars để bảo mật, chống lỗi mã độc khi người dùng nhập linh tinh
        $name = htmlspecialchars($_POST['fullname']);
        $position = htmlspecialchars($_POST['position']);
        $gender = htmlspecialchars($_POST['gender']);
    ?>

        <div class="card">
            <h2><?php echo $name; ?></h2>
            <p><?php echo $position; ?></p>
            <span class="gender"><?php echo strtolower($gender); ?></span>
        </div>

    <?php
    } else {
        // Nếu ai đó cố tình truy cập thẳng file php này mà không qua form
        echo "<p style='color: red;'>Lỗi: Vui lòng quay lại trang <a href='inputForm.html'>Form</a> để nhập dữ liệu!</p>";
    }
    ?>

</body>
</html>
