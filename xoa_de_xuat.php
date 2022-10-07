<?php
    require_once 'dbconfig.php';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
    
        $xoa_sql = "DELETE FROM `de_xuat` WHERE `TENSACH` = '" . $_POST['name'] . "' AND `TEN` = '" . $_POST['muon'] . "'";
                                        
        $process_muon = $pdo ->query($xoa_sql);
        
        echo "<a href='Admin.php'>Bạn vừa thao tác thành công, bấm vào đây để trở lại</a>";
    } catch (Exception $e) {
        echo "<script>alert('Xảy ra lỗi lúc thao tác')</script>";
    }
?>