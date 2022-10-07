<?php
    require_once 'dbconfig.php';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
    
        if (isset($POST['new_num'])) $num = "`STATUS`='" . $POST['new_num'] . "'";
        if (isset($POST['new_name'])) $name = "`TENSACH`='" . $POST['new_name'] . "'";
        if (isset($POST['new_art'])) $art = "`TACGIA`='" . $POST['new_art'] . "'";
        $changenum_sql = "UPDATE `sach` SET ". $num . $name . $art ." WHERE `IBSN` = '".$_POST['IBSN']."'";
                                        
        $process_ = $pdo ->query($changenum_sql);

        echo "<a href='Admin.php'>Bạn vừa thao tác thành công, bấm vào đây để trở lại</a>";
    } catch (Exception $e) {
        echo "<script>alert('Xảy ra lỗi lúc cho mượn')</script>";
    }
?>