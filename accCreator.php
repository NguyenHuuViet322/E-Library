<?php
require_once 'src/PHPExcel.php';

//Đường dẫn file
$file = 'xlsx/data3.xlsx';
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
$sheet = $objPHPExcel->setActiveSheetIndex(0);

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
for ($i = 10; $i <= $Totalrow; $i++) {
    //----Lặp cột
    for ($j = 0;$j < $TotalCol; $j++) {
        // Tiến hành lấy giá trị của từng ô đổ vào mảng
        $data[$i - 10][$j] = $sheet->getCellByColumnAndRow($j, $i)->getValue();
    }
}

for ($i = 0; $i <= 638;$i++)
{
	$date = DateTime::createFromFormat('d/m/Y', $data[$i][3])->format('Y-m-d');
	
	//echo "INSERT INTO thanh_vien (HOTEN, NGAYSINH, LOP, PASS, ACC, SACHMUON)
	//	  VALUES ('".$data[$i][3]."','".$date."','".$data[$i][7]."','".$data[$i][2]."','".$data[$i][8]."','".$data[$i][1]."');";
	echo "INSERT INTO thanh_vien (HOTEN, NGAYSINH, LOP, PASS, ACC, SACHMUON)
		  VALUES ('".$data[$i][1]."','".$date."','".$data[$i][4]."','thaiphien60117','".$data[$i][5]."','".$data[$i][1]."');";
	echo "<br>";
}
//Hiển thị mảng dữ liệu
echo '<pre>';
var_dump($data);
?>