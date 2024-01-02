<?php
// Kiểu dữ liệu trả về là JSON
header('Content-Type: application/json');

// Mặc định nếu đăng nhập không thành công thì sẽ trả về 0
$result = ["RESULT" => "0"];

// Kiểm tra có dữ liệu user và pass do người dùng gửi lên hay không?
if (isset($_POST["user"]) && isset($_POST["pass"])) {
    // Lấy user và pass do người dùng gửi lên gán vào 2 biến
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    // Kiểm tra nếu user và pass hợp lệ thì gán biến kết quả thành 1
    if ($user == "admin" && $pass == "abcd") {
        $result = ["RESULT" => "1"];
    }
}

// Trả về chuỗi JSON của kết quả đăng nhập
echo json_encode($result);