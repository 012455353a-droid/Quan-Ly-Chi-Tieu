<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    if (!empty($email)) {
        $message = "Đăng ký thành công với email: " . htmlspecialchars($email);
    } else {
        $message = "Vui lòng nhập email!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nexcent - Phiên bản Xanh lá</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>

<header class="header">
    <div class="logo">
        <img src="logo.png" alt="Nexcent Logo" style="height: 24px; vertical-align: middle; margin-right: 8px;">
        <span style="font-weight: bold; font-size: 24px;">Nexcent</span>
    </div>
    <nav>
        <a href="#">Trang chủ</a>
        <a href="#">Tính năng</a>
        <a href="#">Cộng đồng</a>
        <a href="#">Bảng giá</a>
    </nav>
    <button class="btn-primary">Đăng ký ngay &rarr;</button>
</header>

<section class="hero">
    <div class="hero-text">
        <h1>
            Bài học và kinh nghiệm <br>
            <span>từ 8 năm qua</span>
        </h1>
        <p>Nơi phát triển công việc nhiếp ảnh của bạn: trang web hay mạng xã hội?</p>
        <button class="btn-primary">Đăng ký</button>
        
        <?php if($message): ?>
            <p style="color: #4CAF50; margin-top: 10px; font-weight: bold;"><?php echo $message; ?></p>
        <?php endif; ?>
    </div>

    <div class="hero-image">
        <img src="illustration.png" alt="Ảnh minh họa" style="max-width: 100%;">
    </div>
</section>

<section class="clients">
    <h2>Khách hàng của chúng tôi</h2>
    <p>Chúng tôi đã và đang làm việc với các khách hàng thuộc danh sách Fortune 500+</p>

    <div class="logos">
        <img src="ql1.jpg" alt="Khách hàng 1">
        <img src="logo2.png" alt="Khách hàng 2">
        <img src="logo3.png" alt="Khách hàng 3">
        <img src="logo4.png" alt="Khách hàng 4">
        <img src="logo5.png" alt="Khách hàng 5">
    </div>
</section>

<section class="community">
    <h2 style="max-width: 500px; margin: 0 auto;">Quản lý toàn bộ cộng đồng của bạn trên một hệ thống duy nhất</h2>
    <p>Nexcent phù hợp với những ai?</p>

    <div class="cards">
        <div class="card">
            <img src="icon1.png" alt="Biểu tượng Thành viên" class="card-icon">
            <h3>Tổ chức <br> Thành viên</h3>
            <p>Phần mềm quản lý của chúng tôi cung cấp khả năng tự động hóa hoàn toàn việc gia hạn và thanh toán cho thành viên</p>
        </div>

        <div class="card">
            <img src="icon2.png" alt="Biểu tượng Quốc gia" class="card-icon">
            <h3>Hiệp hội <br> Quốc gia</h3>
            <p>Phần mềm quản lý của chúng tôi cung cấp khả năng tự động hóa hoàn toàn việc gia hạn và thanh toán cho thành viên</p>
        </div>

        <div class="card">
            <img src="icon3.png" alt="Biểu tượng Câu lạc bộ" class="card-icon">
            <h3>Câu lạc bộ và <br> Hội nhóm</h3>
            <p>Phần mềm quản lý của chúng tôi cung cấp khả năng tự động hóa hoàn toàn việc gia hạn và thanh toán cho thành viên</p>
        </div>
    </div>
</section>

<script src="welcome.js"></script>
</body>
</html>
