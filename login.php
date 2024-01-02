<?php
// Kiểu dữ liệu trả về là JSON
header('Content-Type: application/json');

// Mặc định nếu đăng nhập không thành công thì sẽ trả về false
$result = ["RESULT" => "false"];

// Kiểm tra có dữ liệu username và password do người dùng gửi lên hay không?
if (isset($_POST["username"]) && isset($_POST["password"])) {
    // Lấy username và password do người dùng gửi lên gán vào 2 biến
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra nếu username và password hợp lệ thì gán biến kết quả thành true
    if ($username == "host" && $password == "123") {
        $result = ["RESULT" => "true"];
    }
}

// Trả về chuỗi JSON của kết quả đăng nhập
echo json_encode($result);