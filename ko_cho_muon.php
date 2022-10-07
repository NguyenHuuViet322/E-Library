<?php
    require_once 'dbconfig.php';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
    
        $nguoimuon_sql = "DELETE FROM `request` WHERE `HOTEN` = '".$_POST['muon']."' AND `STT` = '" . $_POST['code'] . "'";
        
        $process_muon = $pdo ->query($nguoimuon_sql);
                                        
        echo $nguoimuon_sql;
        
        echo "<a href='Admin.php'>Bạn vừa thao tác thành công, bấm vào đây để trở lại</a>";
    } catch (Exception $e) {
        echo "<script>alert('Xảy ra lỗi lúc cho mượn')</script>";
    }
?>