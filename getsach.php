<?php
// Kiểu dữ liệu trả về là JSON
header('Content-Type: application/json');

$data = [];
// Kiểm tra có dữ liệu tacgia do người dùng gửi lên hay không?
if (isset($_GET["tacgia"])) {
    // Lấy tacgia do người dùng gửi lên gán vào biến
    $tacgia = $_GET["tacgia"];

    // Kiểm tra nếu tacgia hợp lệ thì gán kết quả
    if ($tacgia == "Nguyen Ngoc Son") {
		$data = [
		    ["TEN" => "Paris Trong Hop Giay", "NXB" => "2017", "SOTRANG" => "156"],
		    ["TEN" => "Muon Khoc That To", "NXB" => "2014", "SOTRANG" => "516"],
		    ["TEN" => "Hoi Ky Son Nam", "NXB" => "2015", "SOTRANG" => "553"],
		    ["TEN" => "Song Nhu Nguoi Paris", "NXB" => "2016", "SOTRANG" => "271"],
		    ["TEN" => "Hen Ho Voi Paris", "NXB" => "2018", "SOTRANG" => "388"]
		];
	}
	elseif ($tacgia == "Nguyen Ngoc Thach") {
		$data = [
		    ["TEN" => "Tuoi tre hoang dai", "NXB" => "2019", "SOTRANG" => "288"],
		    ["TEN" => "Chenh Venh 25", "NXB" => "2017", "SOTRANG" => "240"],
		    ["TEN" => "Mot Giot Dan Ba", "NXB" => "2015", "SOTRANG" => "256"],
		    ["TEN" => "Khoc Giua Sai Gon", "NXB" => "2018", "SOTRANG" => "360"],
		    ["TEN" => "Song Mau", "NXB" => "2014", "SOTRANG" => "244"]
		];
	}
}
// Trả về chuỗi JSON của danh sách Sách
echo json_encode($data);