<?php
    require_once 'dbconfig.php';
    session_start();
    
    if($_POST['user'] =="admin" && $_POST['pass'] == "123") {
        $_SESSION['user'] = "ADMIN";
        header("location: Admin.php");
    }
    else
    {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
        $sql = "SELECT * FROM `thanh_vien` WHERE `ACC` = '".$_POST['user']."'";
        $proccess = $pdo -> query($sql);
        $proccess -> setFetchMode(PDO::FETCH_ASSOC);
        $result = $proccess -> fetch();
        
        if ($result['PASS'] == $_POST['pass']){
             $_SESSION['user'] = $result['ACC'];
             header("location: index.php");
        }
        else
        {
            header("location: Member_login.php");
        }
    }
?>

