<?php
    if (!session_id()) session_start();
    if(isset($_SESSION['user'])) 
	if(substr($_SESSION['user'],2)=="GV"){}
	else 
	{
	     header("location:Admin_login.php");
	}
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="icon" href="img/logo.png" type="image/png">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Tài Nguyên Số - Thư viện trường THPT Thái Phiên</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			
			<style>
			    section#home.banner-area, .call-to-action-area{
			        background-image: -webkit-linear-gradient(90deg, #22baf4 0%, #3ea1f5 100%);
			    }
			    
			    .bia {
			        width: 35%;
			        height:auto;
			        float: left;
			    }
			    
			    .book {
			        border: 2px solid lightblue;
			        border-radius:20px;
			        padding: 1em;
			        overflow: auto;
			        margin-top: 1em;
			        overflow-x: hidden;
			        animation-name:fadein;
			        animation-duration: 1s;
			    }
			    
			    
			    
			    .book-tieude {
			        color: red;
			    }
			    
			    .book-container {
			        margin-top: 0.25em;
			    }
			    
			    #book-status {
			        border: 1px solid blue;
			        border-radius: 15px;
			        background-color: lightblue;
			        color: white;
			    }
			    
			    .book-status {
			        position: absolute;
                    right: 28px;
                    z-index: 2;
                    width: 10%;
			    }
			    
			    @media only screen and (max-width: 991px) {
                    .book-container {
			            font-size: 1.5em;
			        }
			    }
			    
			    @keyframes hover{
			        from {background-color: #3f8d44} 
			        to {background-color:#06560b}
			    }
			    
			    @keyframes unhover{
			        from {background-color: #06560b} 
			        to {background-color:#3f8d44}
			    }
			    
			    @keyframes fadein {
  			        from { opacity: 0; }
  			        to   { opacity: 1; }
                }
			    
			    input[type='submit']{
			        margin-top: 1em;
			        padding: 1em;
			        font-size: 1em;
			        text-align: center;
			        width: 40%;
			        border: 1px solid lightblue;
			        border-radius:20px;
			        color: white;
			        background-color: #3f8d44;
			        animation-name: unhover;
			        animation-duration:0.25s;
			        margin: auto;
			    }
			    
			    input[type='submit']:hover{
			        animation-name: hover;
			        animation-duration:0.25s;
			        background-color: #06560b;
			    }
			    
			    input[type='text']{
			        width: 60%;
			        padding:0.5em;
			    }
			    
			    textarea{
			        width: 60%;
			        padding:0.5em;
			    }
			    
			    #comment_form_zone{
			        width: 70%;
			        margin-left:15%;
			    }

			    #gioithieu {
			        font-size: 1.25em;
			    }
			    
			    /* width */
			    ::-webkit-scrollbar {
			      width: 10px;
			    }

			    /* Track */
			    ::-webkit-scrollbar-track {
			      background: #f1f1f1; 
			      border-radius:10px;
			    }
 
			    /* Handle */
			    ::-webkit-scrollbar-thumb {
			      background: #888; 
			      border-radius:10px;
			    }

			    /* Handle on hover */
			    ::-webkit-scrollbar-thumb:hover {
 			      background: #555; 
			    }
			    
			    @font-face {
			       font-family: Patrick;
			       src: url(fonts/PatrickHand-Regular.ttf);
			    }
			    
			    p {
			        font-family: Patrick;
			        font-size:1.6em;
			        color: black;
			    }
			    
			    .single-footer-widget p {
			        color: #ccc;
			    }
			    
			    h1 {
			        font-family: Patrick;
			        font-size: 60px !important;
			    }
			    
			    a {
			        font-size:100% !important; 
			    }
			    
			    h5 {
    		        font-size: 1.5em !important;
    		        font-weight: bold !important;
		        }
			    
			    h1, h2 {
			        font-family: Patrick;
			    }
			    
			    .modal {
			        display: none; /* Hidden by default */
			        position: fixed; /* Stay in place */
			        left: 0;
		  	        top: 0;
		  	        width: 100%; /* Full width */
			        height: 100%; /* Full height */
			        overflow: auto; /* Enable scroll if needed */
			        background-color: rgb(0,0,0); /* Fallback color */
			        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                    -webkit-animation-name: fadeIn; /* Fade in the background */
                    -webkit-animation-duration: 0.4s;
                    animation-name: fadeIn;
                    animation-duration: 0.4s
        }

                /* Modal Content */
                .modal-content {
                    position: fixed;
                    bottom: 0;
                    background-color: #fefefe;
                    width: 100%;
                    height: 50%;
                    -webkit-animation-name: slideIn;
                    -webkit-animation-duration: 0.4s;
                    animation-name: slideIn;
                    animation-duration: 0.4s
                }
        
                /* The Close Button */
                .close {
                    color: white;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                }
        
                .close:hover,
                .close:focus {
                    color: #000;
                    text-decoration: none;
                    cursor: pointer;
                }

                .modal-header {
                    padding: 2px 16px;
                    background: rgb(2,0,36);
                    background: -moz-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,0.44611347957151615) 0%, rgba(0,212,255,1) 100%);
                    background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,0.44611347957151615) 0%, rgba(0,212,255,1) 100%);
                    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,0.44611347957151615) 0%, rgba(0,212,255,1) 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024",endColorstr="#00d4ff",GradientType=1);
                    color: white;
                }
        
                .modal-body {
                    padding: 2px 16px;
                }

                .modal-footer {
                    padding: 2px 16px;
                    background: rgb(2,0,36);
                    background: -moz-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,0.44611347957151615) 0%, rgba(0,212,255,1) 100%);
                    background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,0.44611347957151615) 0%, rgba(0,212,255,1) 100%);
                    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,0.44611347957151615) 0%, rgba(0,212,255,1) 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024",endColorstr="#00d4ff",GradientType=1);
                    color: white;
                }

                /* Add Animation */
                @-webkit-keyframes slideIn {
                    from {bottom: -300px; opacity: 0} 
                    to {bottom: 0; opacity: 1}
                }

                @keyframes slideIn {
                    from {bottom: -300px; opacity: 0}
                    to {bottom: 0; opacity: 1}
                }
        
                @-webkit-keyframes fadeIn {
                    from {opacity: 0} 
                    to {opacity: 1}
                }

                @keyframes fadeIn {
                    from {opacity: 0} 
                    to {opacity: 1}
                }
                
                #bang_tai_lieu {
                    border-collapse: collapse;
                    width: 100%;
                }
                
                #bang_tai_lieu td,#bang_tai_lieu th {
                font-weight: bold;
                    word-wrap:break-word;
                    border: 1px solid #ddd;
                    padding: 8px;
                }
                
                #bang_tai_lieu tr:nth-child(even){
                    font-weight: bold;
                    background-color: #f2f2f2;
                }
                
                #bang_tai_lieu tr:hover {background-color: #ddd;}
                
                #bang_tai_lieu th {
                    font-weight: bold;
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #04AA6D;
                    color: white;
                }
                

        
        #name {
            border-bottom: 1px solid grey;
            color: blue;
        }
        
        #status {
            z-index: 2;
        }
        
        button:not(.w3-bar-item) {
            border-radius: 20px;
            width: 35%;
            margin-left: 10%;
            margin-top: 1em;
        }
        
        button:hover:not(.w3-bar-item) {
            box-shadow: 1px 1px;
        }
        
			</style>
		</head>
		<body onresize="defineHeightAll();">
        <script>
			    function defineHeight(i)
			    {
			        var height = document.getElementById("bia".concat(i)).offsetHeight;
			        height = height + 30;
			        height = height.toString();
			        console.log(height.concat("px"));
			        document.getElementById("book".concat(i)).style.height = height.concat("px");
			    }
			    
			    function confirmation(i) {
                    if(!confirm("Xóa tài liệu này?")) {
                        return false;
                    }
                    document.getElementById("del".concat(i)).submit();
                }
			</script>
			 <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" m/></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Trang chủ</a></li>
				          <li><a href="sach_list.php">Danh mục sách</a></li>
				          <?php
				            if (isset($_SESSION['user']))
				                echo "<li><a href='tainguyenso.php'>Tài nguyên số</a></li>";
				            else
				                echo "<li><a href='javascript:void(0)' onclick='loginRequired();'>Tài nguyên số</a></li>"
				          ?>
				          <li><a href="login.php"></a></li>
				          <?php
                                if(isset($_SESSION['user'])) {
                                    echo "<li><a href='javascipt:void(0)' id = 'checkstatus' onclick='openModal();'>Tài khoản</a></li>";
		                            echo "<li><a href='javascipt:void(0)'>Xin chào, ".$_SESSION['user']."</a></li>";
		                            echo "<li><a href='logout.php'>Đăng xuất</a></li>";
                                }
                                else 
                                {
                                    echo "<li><a href='Member_login.php'>Đăng nhập</a></li>";
                                }
                          ?>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h5 class="text-white text-uppercase">Thư viện trường THPT Thái Phiên</h5>
							<h1 class="text-uppercase">
								Các tài liệu			
							</h1>
							<p class="text-white pt-20 pb-20">
								Bạn có thể tìm kiếm bài giảng, đề thi,... mình cần ở dưới.
							</p>
						</div>
						<div class="col-lg-5 banner-right">
							<img class="img-fluid" src="img/header-img.png" alt="">
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			
			<!-- Start tutorial Area -->
            <div class="whole-wrap" id="work_place">
				<div class="container">
                    <div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">HƯỚNG DẪN: </h2>
								<p style= "color: blue; margin-left: 2em;display: list-item;">Đây là nơi các bạn tìm các bài giảng, tài liệu, đề thi,... mình cần.</p>
								<p style= "color: blue; margin-left: 2em;display: list-item;">Nếu có lỗi hiện thị, vui lòng tải lại trang web.</p>
							</div>
						</div>
		        	</div>
		        </div>
		    </div>
            <!-- End tutorial Area -->

            <!-- Start form Area -->
            <div class="whole-wrap" id="work_place">
				<div class="container">
                    <div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">DANH MỤC TÀI LIỆU: </h2>
								<form action="#" method="post">
									<div class="mt-10">
										<input type="text" name="book-name" placeholder="Nhập tên tài liệu (Không bắt buộc)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên tài liệu (Không bắt buộc)'"  class="single-input">
									</div>
									<div class="mt-10" style="border-bottom:1px solid blue;">
										<label for="type">Loại tài liệu: </label>
										<div class="form-select" id="default-select">
											<select name="type">
											    <option value="1">Tất cả</option>
												<option value="Bài giảng">Bài giảng</option>
												<option value="Đề thi">Đề thi</option>
												<option value="Tài liệu">Tài liệu</option>
											</select>
										</div>
									</div>
									<div class="mt-10" style="border-bottom:1px solid blue;">
										<label for="subject">Môn học: </label>
										<div class="form-select" id="default-select">
											<select name="subject">
											    <option value="1">Tất cả</option>
												<option value="Toán học">Toán học</option>
												<option value="Văn học">Văn học</option>
												<option value="Tiếng Anh">Tiếng Anh</option>
												<option value="Vật lý">Vật lý</option>
												<option value="Hóa học">Hóa học</option>
												<option value="Sinh học">Sinh học</option>
												<option value="Lịch sử">Lịch sử</option>
												<option value="Địa lý">Địa lý</option>
												<option value="GDCD">Giáo dục công dân</option>
											</select>
										</div>
									</div>
									<div class="mt-10" style="border-bottom:1px solid blue;">
										<label for="nguon">Nguồn: </label>
										<div class="form-select" id="default-select">
											<select name="nguon">
											    <option value="1">Tất cả</option>
												<option value="Chính chủ">Chính chủ</option>
												<option value="Sưu tầm">Sưu tầm</option>
											</select>
										</div>
									</div>
									<div class="mt-10" style="border-bottom:1px solid blue;">
										<label for="sort">Sắp xếp theo: </label>
										<div class="form-select" id="default-select">
											<select name="sort">
												<option value="TENTAILIEU">Tên tài liệu (A-Z)</option>
												<option value="THELOAI">Thể loại</option>
												<option value="STT">Độ mới</option>
											</select>
										</div>
									</div>
									<div class="mt-10">
										<input type="submit" name="submit" id="submit" value="Tìm Tài Liệu">
									</div>
								</form>
							</div>
						</div>
		        	</div>
		        </div>
		    </div>
            <!-- End form Area -->
            
            <!-- Start book Area -->
            <div class="whole-wrap" id="result_place">
				<div class="container">
                    <div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">RESULT: </h2>
								<--  Thiết kế trước -->
								<div> 
								    <table id='bang_tai_lieu' style= "table-layout: fixed;">
								        <tr>
								            <th style="width: 20%;">Tên tài liệu</th>
								            <th style="width: 15%;">Giáo viên</th>
								            <th style="width: 10%;">Môn học</th>
								            <th style="width: 10%;">Loại tài liệu</th>
								            <th style="width: 10%;">Nguồn</th>
								            <th style="width: 15%;">Đường dẫn</th>
								            <th style="width: 20%;">Xóa</th>
								        </tr>
								<?php
								    require_once 'dbconfig.php';
                                    require "autoload.php";
                                    require "config-cloud.php";
                                    include "src/Helpers.php";
                                    
                                    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
                                    
                                    if(isset($_POST['submit'])){
                                        $dem = 0; $ten="";$theloai="";$monhoc="";$nguon="";$giaovien="`GIAOVIEN` != '0' AND";
                                        if ($_POST['book-name'] != "") 
                                        {
                                            $dem = $dem + 1;
                                            $ten = "`TENTAILIEU` LIKE '%".$_POST['book-name']."%' AND ";
                                        }
                                        
                                        if ($_POST['type']!="1") 
                                        {
                                            $dem = $dem + 1;
                                            $theloai = "`THELOAI` = '".$_POST['type']."' AND ";
                                        }
                                        
                                        if ($_POST['subject']!="1") 
                                        {
                                            $dem = $dem + 1;
                                            $subject = "`MONHOC` = '".$_POST['subject']."' AND ";
                                        }
                                        
                                        if ($_POST['nguon']!="1") 
                                        {
                                            $dem = $dem + 1;
                                            $nguon = "`NGUON` = '".$_POST['nguon']."' AND ";
                                        }
                                        
                                        $sql = "SELECT * FROM `tai_nguyen_so` WHERE " . $ten . $theloai . $monhoc . $nguon. $giaovien . " 1 ORDER BY `" . $_POST['sort'] . "` ";
                                        echo $sql;
                                        echo "<p id='determiner' style='display:none'>1</p>";
                                        
                                    }else {
                                        $sql = "SELECT * FROM `tai_nguyen_so` WHERE `GIAOVIEN` != '0' ORDER BY RAND() LIMIT 10";
                                        echo "<p id='determiner' style='display:none'>0</p>";
                                    }
                                    
                                    $proccess = $pdo -> query($sql);
                                    $proccess -> setFetchMode(PDO::FETCH_ASSOC);
                                    $i=1;
                                    while ($result = $proccess -> fetch()){
                                        $i=$i+1;
                                        echo "
                                        <tr>
								            <td>".$result['TENTAILIEU']."</th>
								            <td>".$result['GIAOVIEN']."</th>
								            <td>".$result['MONHOC']."</th>
								            <td>".$result['THELOAI']."</th>
								            <td>".$result['NGUON']."</th>
								            <td><a href=".$result['TMP'].">Click Here</a></th>
								            <td>
								                <form method='POST' id='del".$i."'>
								                     <input value='".$result['STT']."' style='display:none' type='text' name='STT'>
								                     <input type='submit' name='delete' style='width:100%' value='Xóa' onclick='return confirmation(".$i.");'>
								                </form>
								            </td>
								        </tr>
								        ";
                                    }
								?>
								    </table>
								</div> 
							</div>
						</div>
		        	</div>
		        </div>
		    </div>
            <!-- End book Area -->
            
            <?php
                if (isset($_POST['delete']))
                {
                    if ($_POST['delete']=true){
                    $deleteSql = "UPDATE `tai_nguyen_so` SET `GIAOVIEN`='0' WHERE `STT`='".$_POST['STT']."'";
                    if($pdo->query($deleteSql))
                        {
                            echo "<script>alert('Bạn vừa xóa tài liệu thành công!')</script>";
                            echo "<script>window.location.href = 'Admin_QuanLyTaiNguyenSo.php';</script>";
                        }
                        else
                        {
                            echo "<script>alert('Có lỗi xảy ra!')</script>";
                            echo "<script>window.location.href = 'Admin_QuanLyTaiNguyenSo.php';</script>";
                        }
                    }
                }
            ?>
            
            <div id="borrow_status" class="w3-modal">
 			    <div class="w3-modal-content" style="border-radius: 15px;">
 			    
 			    <?php 
  			        if (isset($_SESSION['user']))
 			        {
 			            require_once 'dbconfig.php';
 			            
 			            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 			            
 			            $sql = "SELECT * FROM `thanh_vien` WHERE `ACC` = '".$_SESSION['user']."'";
 			            
 			            $process= $pdo->query($sql);
 			            $process-> setFetchMode(PDO::FETCH_ASSOC);
 			        }
 			    ?>

			    <header class="w3-container w3-teal" style="border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: #25256e !important;">
			        <span onclick="document.getElementById('borrow_status').style.display='none'" class="w3-button w3-display-topright" style="border-top-right-radius: 15px;">&times;</span>
			        <p style="margin-top: 0.5em; color: white;">Thông tin tài khoản</p>
 			   </header>

 			   <div class="w3-container" style="padding-top: 0.5em">
			        <?php
			        if (isset($_SESSION['user'])) {
			            while ($result = $process->fetch())
 			            {
 			                echo "<hr>";
 			                echo "<p> <span style='color: #8c05ed;'>Họ tên:</span> ".$result['HOTEN']."</p>";
 			                echo "<p> <span style='color: #8c05ed;'>Ngày sinh:</span> ".date("d-m-Y",strtotime($result['NGAYSINH']))."</p>";
 			                echo "<p> <span style='color: #8c05ed;'>Số báo danh:</span> ".$result['ACC']."</p>";
 			                echo "<hr>";
 			            }
 			            
 			            if ($_SESSION['user'] == "ADMIN")
 			            {
 			                echo "<div class='w3-bar' style='margin-bottom: 0.5em;font-family: Patrick;font-size: 120%;font-weight: bold;'>
                                    <a href='doi_mat_khau.php'><button class='w3-bar-item w3-button w3-white' style='width:50%'>Đổi mật khẩu</button></a>
                                    <a href='Admin.php'><button class='w3-bar-item w3-button w3-gray' style='width:50%'>Admin</button></a>
                                </div>";
 			            } else
 			            {
 			                if (substr($_SESSION['user'],0,2) == "GV")
 			                {
 			                    echo "<div class='w3-bar' style='margin-bottom: 0.5em;font-family: Patrick;font-size: 120%;font-weight: bold;'>
                                    <a href='doi_mat_khau.php'><button class='w3-bar-item w3-button w3-white' style='width:50%'>Đổi mật khẩu</button></a>
                                    <a href='Admin_tainguyenso.php'><button class='w3-bar-item w3-button w3-gray' style='width:50%'>Thêm tài liệu</button></a>
                                </div>";
 			                }
 			                else
 			                {
 			                    echo "<div class='w3-bar' style='margin-bottom: 0.5em;font-family: Patrick;font-size: 120%;font-weight: bold;'>
                                    <a href='doi_mat_khau.php'><button class='w3-bar-item w3-button w3-white' style='width:50%'>Đổi mật khẩu</button></a>
                                    <button class='w3-bar-item w3-button w3-gray' style='width:50%' disabled>Not For Students</button>
                                </div>";
 			                }
 			            }
			        }
			        ?>
 			   </div>

			    <footer class="w3-container w3-teal" style="border-bottom-left-radius: 15px;border-bottom-right-radius: 15px; background-color: blue;background-color: #25256e !important;">
			        <p style="margin-top: 0.5em;color: white;" >"Nhớ trả sách đúng hạn nhé! :3 "</p>
 			    </footer>
 			    
 			    </div>
 			    </div>
			
			<!-- Start call-to-action Area -->
			<section class="call-to-action-area section-gap">
				<div class="container">
					<div class="row justify-content-center top">
						<div class="col-lg-12">
							<h1 class="text-white text-center">Hãy đọc sách!</h1>
							<p class="text-white text-center mt-30">
								Một cuốn sách là cả một bầu trời chân lý. Hãy chung tay xây dựng một văn hóa đọc để đất nước Việt Nam ngày một phát triển.
							</p>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End call-to-action Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Nhóm Khoa Học Kỹ Thuật
								</p>
								<p class="footer-text">
								    Thư viện THPT Thái Phiên
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>THPT Thái Phiên</h6>
								<p>258, Đà Nẵng, Ngô Quyền, HP</p>
								<div class="" id="mc_embed_signup">
									
								</div>
							</div>
						</div>							
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>			
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			<script>
			    $(document).ready(function(){
			        $(window).load(function(){
			            if(document.getElementById('determiner').innerText == "1")
			            {
			                $('html, body').animate({ scrollTop: $('#result_place').offset().top - 40}, 1000);
			            }
			            else
			            {
			                $('html, body').animate({ scrollTop: $('#work_place').offset().top - 40}, 1000);
			            }
			        })
			    })
			    
			    function defineHeightAll() {
			        for(var i=1;i<=100;i++) defineHeight(i);
			    }
			    
			    function mo(i) {
			        document.getElementById("myModal".concat(i)).style.display = "block";
			        document.getElementByClassName("book-status").style.display = "none";
			    }
			    
			    function dong(i) {
			        document.getElementById("myModal".concat(i)).style.display = "none";
			        document.getElementByClassName("book-status").style.display = "block";
			    }
			    
			    function mo1(i) {
			        document.getElementById("myModal1".concat(i)).style.display = "block";
			        document.getElementByClassName("book-status").style.display = "none";
			    }
			    
			    function dong1(i) {
			        document.getElementById("myModal1".concat(i)).style.display = "none";
			        document.getElementByClassName("book-status").style.display = "block";
			    }
			    <script>
			    function openModal()
			    {
			        document.getElementById('borrow_status').style.display="block";
			    }
			
			    document.getElementById('checkstatus').addEventListener("click", () => {
	                    openModal();
                });
			    
			    window.onclick = function(event) {
                    if (event.target == document.getElementById('borrow_status')) {
                        document.getElementById('borrow_status').style.display = "none";
                    }
                }
	
			</script>
			<script>
			    function openModal()
			    {
			        document.getElementById('borrow_status').style.display="block";
			    }
			
			    document.getElementById('checkstatus').addEventListener("click", () => {
	                    openModal();
                });
			    
			    window.onclick = function(event) {
                    if (event.target == document.getElementById('borrow_status')) {
                        document.getElementById('borrow_status').style.display = "none";
                    }
                }
	
			</script>
		</body>
	</html>



