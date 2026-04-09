<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Kết nối database
    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Lỗi kết nối");
    }

    // Kiểm tra email có tồn tại không
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Ở đây có thể gửi email reset (nâng cao)
        echo "Email tồn tại! Link reset đã được gửi (giả lập).";
    } else {
        echo "Email không tồn tại!";
    }

    $conn->close();
}
?>
