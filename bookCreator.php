<?php
require_once 'src/PHPExcel.php';

//Đường dẫn file
$file = 'xlsx/data2.xlsx';
//Tiến hành xác thực file
$objFile = PHPExcel_IOFactory::identify($file);
$objData = PHPExcel_IOFactory::createReader($objFile);

//Chỉ đọc dữ liệu
$objData->setReadDataOnly(true);

// Load dữ liệu sang dạng đối tượng
$objPHPExcel = $objData->load($file);

//Lấy ra số trang sử dụng phương thức getSheetCount();
// Lấy Ra tên trang sử dụng getSheetNames();

//Chọn trang cần truy xuất
$sheet = $objPHPExcel->setActiveSheetIndex(1);

//Lấy ra số dòng cuối cùng
$Totalrow = $sheet->getHighestRow();
//Lấy ra tên cột cuối cùng
$LastColumn = $sheet->getHighestColumn();

//Chuyển đổi tên cột đó về vị trí thứ, VD: C là 3,D là 4
$TotalCol = PHPExcel_Cell::columnIndexFromString($LastColumn);

//Tạo mảng chứa dữ liệu
$data = [];

//Tiến hành lặp qua từng ô dữ liệu
//----Lặp dòng, Vì dòng đầu là tiêu đề cột nên chúng ta sẽ lặp giá trị từ dòng 2
for ($i = 3; $i <= $Totalrow; $i++) {
    //----Lặp cột
    for ($j = 0; $j < $TotalCol; $j++) {
        // Tiến hành lấy giá trị của từng ô đổ vào mảng
        $data[$i - 3][$j] = $sheet->getCellByColumnAndRow($j, $i)->getValue();
    }
	
	echo "INSERT INTO sach (CODE, TENSACH, TACGIA, THELOAI, GIOITHIEU, STATUS, IBSN)
		  VALUES (\"".$data[$i-4][1]."\",\"".$data[$i-4][2]."\",\"".$data[$i-4][3]."\",\"".$data[$i-4][4]."\",\"".$data[$i-4][6]."\",\"".$data[$i-4][5]."\",\""."\");";
	echo '<br>';
}
//Hiển thị mảng dữ liệu
echo '<pre>';
var_dump($data);
?>