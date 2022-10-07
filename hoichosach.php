	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="icon" href="img/logo.png" type="image/png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Hội chợ sách - Thư viện trường THPT Thái Phiên</title>

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
			    }
			    
			    .infor {
			        margin-left: 40%;
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
			        from {background-color: blue} 
			        to {background-color:lightblue}
			    }
			    
			    @keyframes unhover{
			        from {background-color: lightblue} 
			        to {background-color:blue}
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
			        background-color: blue;
			        animation-name: unhover;
			        animation-duration:0.25s;
			    }
			    
			    input[type='submit']:hover{
			        animation-name: hover;
			        animation-duration:0.25s;
			        background-color: lightblue;
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
			</script>
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Trang chủ</a></li>
				          <li><a href="sach_list.php">Các đầu sách</a></li>
				          <li><a href="muon_sach.php">Mượn sách</a></li>
				          <li><a href="tainguyenso.php">Tài nguyên số</a></li>
				          <li><a href="de_xuat.php">Đề xuất mua</a></li>
				          <li><a href="hoichosach.php">Hội chợ</a></li>
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
								Hội chợ sách			
							</h1>
							<p class="text-white pt-20 pb-20">
								Trao đổi sách với các bạn đọc của thư viện.
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
								<p style= "color: blue; margin-left: 2em; display: list-item;">Đổi các cuốn sách hay cho thư viện để đổi lấy Điểm.</p>
								<p style= "color: blue;  margin-left: 2em;display: list-item;">Các bạn có thể sử dụng điểm để mua các cuốn sách trong hội chợ, ghi nhớ mã giao dịch và báo cho thủ thư nếu muốn mua sách.</p>
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
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">KIỂM TRA SỐ DƯ: </h2>
								<form method="post">
								    <div class="mt-10">
										<input type="text" name="user" placeholder="Nhập Gmail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập User '" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" name="pass" placeholder="Nhập Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Password '" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="submit" name="submit" value="Check tài khoản">
									</div>
								</form>
							</div>
						</div>
		        	</div>
		        </div>
		    </div>
            <!-- End form Area -->
            
            <!-- Start book Area -->
            <div class="whole-wrap" id="work_place">
				<div class="container">
                    <div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">BOOK FOR SALES: </h2>
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
                                    
                                    $sql = "SELECT * FROM `hoicho` WHERE `SDT` != '0'";
                                    
                                    $proccess = $pdo -> query($sql);
                                    $proccess -> setFetchMode(PDO::FETCH_ASSOC);
                                    $i=1;
                                    while ($result = $proccess -> fetch()){
                                        $bia = cloudinary_url("ban".$result['STT'] , array("resource_type" => "image"));
                                        echo "<div class='book' id = 'book".$i."'>
								              <div class='bia-content'>
								              <img src = '".$bia."' class='bia' id='bia".$i."'>
								              </div>
								              <div class='infor'>
								                  <h3 class='book-container'><span class='book-tieude'>Mã giao dịch: </span>" . $result['STT'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Tên sách: </span>" . $result['TENSACH'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Giá: </span>" . $result['GIA'] . " Điểm</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Người bán: </span>" . $result['NGUOIBAN'] . "</h3>
								              </div>
								          </div>";
								          echo "<script>defineHeight(".$i.")</script>";
								          $i=$i+1;
                                    }
                                    
                                    if(isset($_POST['submit'])){
                                        $sql = "SELECT * FROM `thanh_vien` WHERE `GMAIL` = '".$_POST['user']."'";
                                        $info  = $pdo -> query($sql);
                                        $info -> setFetchMode(PDO::FETCH_ASSOC);
                                        $login = $info->fetch();
                                        
                                        if($login['PASS'] == $_POST['pass'])
                                        {
                                            echo "<script>alert('Số dư trong tài khoản: ". $login['SACHMUON'] ." Điểm')</script>";
                                        }
                                        else
                                        {
                                            echo "<script>alert('Sai thông tin đăng nhập')</script>";
                                        }
                                    }
								?>
							</div>
						</div>
		        	</div>
		        </div>
		    </div>
            <!-- End book Area -->
			
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
			            $('html, body').animate({ scrollTop: $('#work_place').offset().top - 40}, 1000);
			        })
			    })
			    
			    function defineHeightAll() {
			        for(var i=1;i<=100;i++) defineHeight(i);
			    }
			</script>
		</body>
	</html>



