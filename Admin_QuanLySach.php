<?php
    if (!session_id()) session_start();
    if(isset($_SESSION['user'])) {
		            
    }
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
		<title>Quản lý sách - Thư viện trường THPT Thái Phiên</title>

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
			    
			    .infor {
			        margin-left: 40%;
			    }
			    
			    .book-tieude {
			        font-family: Patrick;
			        color: #8c05ed;
			    }
			    
			    .book-container {
			        font-family: Patrick;
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
			        from {background-color: blue} 
			        to {background-color:lightblue}
			    }
			    
			    @keyframes unhover{
			        from {background-color: lightblue} 
			        to {background-color:blue}
			    }
			    
			    @keyframes fadein {
  			        from { opacity: 0; }
  			        to   { opacity: 1; }
                }
			    
			    input[type='submit']:not(#myBtn){
			        margin-top: 1em;
			        padding: 1em;
			        font-size: 1em;
			        text-align: center;
			        width: 40%;
			        border: 1px solid lightblue;
			        border-radius:20px;
			        color: white;
			        background-color: blue;
			        animation-name: unhover;
			        animation-duration:0.25s;
			        margin: auto;
			    }
			    
			    input[type='submit']:hover:not(#myBtn){
			        animation-name: hover;
			        animation-duration:0.25s;
			        background-color: lightblue;
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
			        font-size:1.5em;
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

.modal-body {padding: 2px 16px;
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

        #comment_zone {
            border: 1px solid grey;
            border-radius: 10px;
            width: 80%;
            margin: auto;
            display: block;
            padding: 0.25em;
            margin-top: 0.25em;
        }
        
        #name {
            border-bottom: 1px solid grey;
            color: blue;
        }
        
        #status {
            z-index: 2;
        }
        
        button :not(.w3-bar-item) {
            border-radius: 20px;
            width: 80%;
            margin-left: 10%;
            margin-top: 1em;
        }
        
        button:hover:not(.w3-bar-item) {
            box-shadow: 1px 1px;
        }
        
        #myBtn {
            border-radius: 20px;
            width: 80%;
            margin-left: 10%;
            margin-top: 1em;
        }
        
			</style>
		</head>
		<body onresize="defineHeightAll();">
        <script>
                function confirmation(i) {
                    if(!confirm("Xóa tài liệu này?")) {
                        return false;
                    }
                    document.getElementById("del".concat(i)).submit();
                }
        
			    function defineHeight(i)
			    {
			        var height = document.getElementById("bia".concat(i)).offsetHeight;
			        height = height + 30;
			        height = height.toString();
			        console.log(height.concat("px"));
			        document.getElementById("book".concat(i)).style.height = height.concat("px");
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
								Các đầu sách			
							</h1>
							<p class="text-white pt-20 pb-20">
								Bạn có thể tìm kiếm đầu sách mình cần ở dưới.
							</p>
						</div>
						<div class="col-lg-5 banner-right">
							<img class="img-fluid" src="img/header-img.png" alt="">
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->

            <!-- Start form Area -->
            <div class="whole-wrap" id="work_place">
				<div class="container">
                    <div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">DANH MỤC SÁCH: </h2>
								<form action="#" method="post">
									<div class="mt-10">
										<input type="text" name="book-name" placeholder="Nhập tên sách (Không bắt buộc)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên sách (Không bắt buộc)'"  class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="book-tacgia" placeholder="Nhập tác giả (Không bắt buộc)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tác giả (Không bắt buộc)'"  class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="book-code" placeholder="Nhập mã sách (Không bắt buộc)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tác giả (Không bắt buộc)'"  class="single-input">
									</div>
									
									<div class="mt-10" style="border-bottom:1px solid blue;">
										<label for="sort">   Sắp xếp theo: </label>
										<div class="form-select" id="default-select">
											<select name="sort">
												<option value="IBSN">Mã sách</option>
												<option value="TENSACH">Tên sách</option>
												<option value="TACGIA">Tác giả</option>
											</select>
										</div>
									</div>
									<div class="mt-10">
										<input type="submit" name="submit" id="submit" value="Tìm Sách">
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
								<!--  Thiết kế trước
								<div class='book'>
								    <div class='bia-content'>
								    <img src = 'https://res.cloudinary.com/dxtm7kh00/image/upload/v1601561486/sach1.jpg' class='bia'>
								    <img class='book-status' src='img/avai.png'>
								    </div>
								    <div class='infor'>
								        <h3 class='book-container'><span class='book-tieude'>Tên sách: </span>Lolite</h3>
								        <h3 class='book-container'><span class='book-tieude'>Tác giả: </span>Vladimir</h3>
								        <h3 class='book-container' style='border-bottom: 1px solid black;'><span class='book-tieude'>Mã sách: </span>1</h3>
								        <h3 class='book-container'><span class="book-tieude">Giới thiệu: </span>		Lolita là một tiểu thuyết của Vladimir Vladimirovich Nabokov. Tiểu thuyết được viết bằng tiếng Anh và được xuất bản vào năm 1955 ở Paris</h3>
								    </div>
								</div> -->
								<?php
								    require_once 'dbconfig.php';
                                    require "autoload.php";
                                    require "config-cloud.php";
                                    include "src/Helpers.php";
                                    
                                    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
                                    
                                    if(isset($_POST['submit'])){
                                        $dem = 0; $ten="";$tacgia="";$theloai="";$code="`CODE` != 0 AND";
                                        if (isset($_POST['book-name'])) 
                                        {
                                            $dem = $dem + 1;
                                            $ten = "`TENSACH` LIKE '%".$_POST['book-name']."%' AND ";
                                        }
                                        
                                        if (isset($_POST['book-tacgia'])) 
                                        {
                                            $dem = $dem + 1;
                                            $tacgia = "`TACGIA` LIKE '%".$_POST['book-tacgia']."%' AND ";
                                        }
                                        
                                        if (isset($_POST['book-code'])) 
                                        if ($_POST['book-code']!="")
                                        {
                                            $dem = $dem + 1;
                                            $code = "`CODE` LIKE '%".$_POST['book-code']."%' AND ";
                                        }
                                        
                                        $sql = "SELECT * FROM `sach` WHERE " . $ten . $tacgia . $code ." 1 ORDER BY `" . $_POST['sort'] . "` ";
                                        echo "<p id = 'determiner' style='display:none'>1</p>";
                                        
                                    }else {
                                        $sql = "SELECT * FROM `sach` WHERE `CODE` != '0'";
                                        echo "<p id = 'determiner' style='display:none'>0</p>";
                                    }
                                    
                                    $proccess = $pdo -> query($sql);
                                    $proccess -> setFetchMode(PDO::FETCH_ASSOC);
                                    $i=1;
                                    while ($result = $proccess -> fetch()){
                                        if($result['STATUS']>=1) $status="avai"; else $status="out";
                                        $bia = cloudinary_url("sach".$result['IBSN'].".jpg" , array("resource_type" => "image"));
                                        
                                        echo "<div class='book' id = 'book".$i."'>
								              <div class='bia-content'>
								              <img src = '".$bia."' class='bia' id='bia".$i."'>
								              <img id='status' class='book-status' src='img/" . $status . ".png'>
								              </div>
								              <div class='infor'>
								                  <h3 class='book-container'><span class='book-tieude'>Tên sách: </span>" . $result['TENSACH'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Tác giả: </span>" . $result['TACGIA'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Mã sách: </span>" . $result['CODE'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Nhà xuất bản: </span>" . $result['THELOAI'] . "</h3>
								                  <div id='comment_btn'>";
								        if (isset($_SESSION['user']))
								              echo "<a href='Book_Detail.php?code=".$result['CODE']."'><button id='myBtn'>Xem Review</button></a>";
								        else
								              echo "<a href='javascript:void(0)' onclick='loginRequired();'><button id='myBtn'>Xem Review</button></a>";
								              echo "<form method='POST' id='del".$i."'>
								                        <input value='".$result['IBSN']."' style='display:none' type='text' name='IBSN'>
								                        <input type='submit' name='delete' id='myBtn' value='Xóa' onclick='return confirmation(".$i.");'>
								                    </form>";
								        echo "      </div>
								              </div>
								          </div>";
								        echo "<script>setTimeout(defineHeight(".$i."), 3000);</script>";
								          
                                    }
								?>
							</div>
						</div>
		        	</div>
		        </div>
		    </div>
            <!-- End book Area -->
            
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
			   <?php
                if (isset($_POST['delete']))
                {
                    if ($_POST['delete']=true){
                    $deleteSql = "UPDATE `sach` SET `CODE`='0' WHERE `IBSN`='".$_POST['IBSN']."'";
                    if($pdo->query($deleteSql))
                        {
                            echo "<script>alert('Bạn vừa xóa tài liệu thành công!')</script>";
                            echo "<script>window.location.href = 'Admin_QuanLySach.php';</script>";
                        }
                        else
                        {
                            echo "<script>alert('Có lỗi xảy ra!')</script>";
                            echo "<script>window.location.href = 'Admin_QuanLySach.php';</script>";
                        }
                    }
                }
                ?>
			
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
			</script>
			<script>
			    function loginRequired()
			    {
			        alert("Bạn cần đăng nhập để truy cập tài nguyên số!");
			    }
			
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



