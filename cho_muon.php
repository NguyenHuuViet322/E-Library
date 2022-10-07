<?php
    require_once 'dbconfig.php';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
    
        $nguoimuon_sql = "SELECT * FROM `thanh_vien` WHERE `HOTEN` = '".$_POST['muon']."'";
        $sach_sql      = "SELECT * FROM `sach` WHERE `IBSN` = '".$_POST['code']."'";
                                        
        $process_muon = $pdo ->query($nguoimuon_sql);
        $process_sach = $pdo ->query($sach_sql);
                                        
        $result = $process_sach->fetch();
        $muon   = $process_muon->fetch();    
        $stat = $result['STATUS']-1;
        
        $update_request = "UPDATE `request` SET `NGAY`='".date('Y-m-d')."', `CONFIRM`=1 WHERE `HOTEN` = '" . $_POST['muon'] . "'";
        $update_muon    = "UPDATE `thanh_vien` SET `SACHMUON`='".$_POST['code']."' WHERE GMAIL = '" . $muon['GMAIL'] . " AND `LOP` = '".$muon['LOP']."'";
        $update_sach    = "UPDATE `sach` SET `STATUS`=" . $stat . " WHERE `IBSN` = '" . $_POST['code'] . "'";
        
        $process = $pdo->query($update_request);
        $process = $pdo->query($update_muon);
        $process = $pdo->query($update_sach);
        
        echo "<a href='Admin.php'>Bạn vừa thao tác thành công, bấm vào đây để trở lại</a>";
    } catch (Exception $e) {
        echo "<script>alert('Xảy ra lỗi lúc cho mượn')</script>";
    }
?>