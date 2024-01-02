<?php
// Kiểu dữ liệu trả về là JSON
header('Content-Type: application/json');

$data = [];
// Kiểm tra có dữ liệu loaihanghoa do người dùng gửi lên hay không?
if (isset($_GET["loaihanghoa"])) {
    // Lấy loaihanghoa do người dùng gửi lên gán vào biến
    $loaihanghoa = $_GET["loaihanghoa"];

    // Kiểm tra nếu loaihanghoa hợp lệ thì gán kết quả
    if ($loaihanghoa == "nuoc ngot") {
        $data = [
			["ma" => "1", "ten" => "coca", "gia" => "8300"],
			["ma" => "2", "ten" => "pepsi", "gia" => "6000"],
			["ma" => "3", "ten" => "mirinda", "gia" => "9500"],
			["ma" => "4", "ten" => "twister", "gia" => "7500"],
			["ma" => "5", "ten" => "fanta", "gia" => "6250"]
		];
    }
	elseif ($loaihanghoa == "bia") {
        $data = [
			["ma" => "6", "ten" => "tiger", "gia" => "16500"],
			["ma" => "7", "ten" => "budweiser", "gia" => "2400"],
			["ma" => "8", "ten" => "beck", "gia" => "14500"],
			["ma" => "9", "ten" => "heiniken", "gia" => "18000"],
			["ma" => "10", "ten" => "hoegaarden", "gia" => "26000"]
		];
    }
}

// Trả về chuỗi JSON của danh sách Hàng hóa
echo json_encode($data);