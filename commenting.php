<?php
    require_once 'dbconfig.php';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
    
        $nguoimuon_sql = "SELECT * FROM `thanh_vien` WHERE `GMAIL` = '".$_POST['mail']."'";
        $sach_sql      = "SELECT * FROM `sach` WHERE `IBSN` = '".$_POST['code']."'";
                                        
        $process_muon = $pdo ->query($nguoimuon_sql);
        $process_sach = $pdo ->query($sach_sql);
                                        
        $process_muon ->setFetchMode(PDO::FETCH_ASSOC);   
        $process_sach ->setFetchMode(PDO::FETCH_ASSOC);  
                                        
        $result = $process_sach->fetch();
        $muon   = $process_muon->fetch();    
         
        if($_POST['pass'] == $muon['PASS']){
            $comment_sql = "INSERT INTO `comment`(`CODE`, `COMMENT`, `DATE`, `NGUOIDANG`) VALUES ('".$_POST['code']."','".$_POST['comment']."','".date('Y-m-d')."','".$muon['HOTEN']."')";
            
            $process = $pdo -> query($comment_sql);
        }
        
        echo "<a href='sach_list.php'>Bạn vừa thao tác thành công, bấm vào đây để trở lại</a>";
    } catch (Exception $e) {
        echo "<script>alert('Xảy ra lỗi lúc cho mượn')</script>";
    }
?>