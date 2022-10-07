<?php
    require_once 'dbconfig.php';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
    
        $buyer_sql = "SELECT * FROM `thanh_vien` WHERE `HOTEN` = '".$_POST['name']."'";
        $book_sql  = "SELECT * FROM `hoicho` WHERE `STT` = '".$_POST['code']."'";
        
        $buyer_process = $pdo->query($buyer_sql);
        $book_process  = $pdo->query($book_sql);
        
        $buyer = $buyer_process->fetch();
        $book  = $book_process ->fetch();
        
        if ($buyer['SDT'] == $_POST['sdt'])
        {
            if($book['GIA'] <= $buyer['SACHMUON'])
            {
                $xu = $buyer['SACHMUON']-$book['GIA'];
                
                $tru_tien_sql = "UPDATE `thanh_vien` SET `SACHMUON`='".$xu."' WHERE `HOTEN` = '".$_POST['name']."'";
                $ban_sach_sql = "UPDATE `hoicho` SET `SDT`='0' WHERE `STT` = '".$_POST['code']."'";
                
                $process = $pdo->query($tru_tien_sql);
                $process = $pdo->query($ban_sach_sql);
            }
            else
            {
                echo "<script>alert('Không đủ xu để thực hiện')</script>";
            }
        }
        else
        {
            echo "<script>alert('Sai thông tin')</script>";
        }
        
        echo "<a href='Admin.php'>Bấm vào đây để trở lại</a>";
    } catch (Exception $e) {
        echo "<script>alert('Xảy ra lỗi lúc cho mượn')</script>";
    }
?>