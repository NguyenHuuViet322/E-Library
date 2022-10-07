<?php
    if (!session_id()) session_start();
?>
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
		<title>Mượn sách - Thư viện trường THPT Thái Phiên</title>

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
			</style>
		</head>
		<body>
		    
		    <?php
         require_once 'dbconfig.php';
         require "autoload.php";
         require "config-cloud.php";
         
         if(isset($_POST['submit'])){
         if(isset($_POST['gmail']) && isset($_POST['pass']) && isset($_POST['code'])){
             $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
             
             $sql_muon = "SELECT * FROM `thanh_vien` WHERE `GMAIL`='". $_POST['gmail'] ."'";
             $process  = $pdo->query($sql_muon);
             $process ->setFetchMode(PDO::FETCH_ASSOC);
             $info = $process->fetch();
             if ($info['PASS'] == $_POST['pass']){
                 if ($info['SACHMUON'] == 0) {
                     $sachInfo_sql = "SELECT * FROM `sach` WHERE `IBSN` ='" . $_POST['code'] . "'";
                     $process = $pdo ->query($sachInfo_sql);
                     $process -> setFetchMode(PDO::FETCH_ASSOC);
                     $stat = $process ->fetch();
                     
                     if ($stat['STATUS'] > 0) 
                     {
                         $date= date('Y-m-d');
                         $sql_addrequest = "INSERT INTO `request`(`STT`, `HOTEN`, `LOP`, `NGAY`, `CONFIRM`) VALUES ('" . $_POST['code'] . "','" . $info['HOTEN'] . "','" . $info['LOP'] ."','" . $date . "', 0)";
                         echo $sql_addrequest;
                         
                         $process = $pdo -> query($sql_addrequest);
                         echo "<script type='text/javascript'>alert('Yêu cầu mượn sách vừa được gửi!');</script>";
                     }
                     else echo "<script type='text/javascript'>alert('Sách đã được mượn hết!');</script>";
                 } else {
                     echo "<script type='text/javascript'>alert('Bạn chỉ có thể mượn thêm khi đã trả sách!');</script>";
                 }
             } else {
                 echo "<script type='text/javascript'>alert('Sai mật khẩu hoặc Gmail!');</script>";
             }
         } 
         else 
         {
             echo "<script type='text/javascript'>alert('Bạn nhập thiếu thông tin!');</script>";
         }
         }
        ?>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Trang chủ</a></li>
				          <li><a href="sach_list.php">Các đầu sách</a></li>
				          <li><a href="tainguyenso.php">Tài nguyên số</a></li>
				          <li><a href="login.php"></a></li>
				          <?php
                                if(isset($_SESSION['user'])) {
		                            echo "<li><a href='#'>Xin chào, ".$_SESSION['user']."</a></li>";
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
								Mượn sách			
							</h1>
							<p class="text-white pt-20 pb-20">
								Bạn có thể gửi yêu cầu mượn sách ở phía dưới.
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
								<p style= "color: blue; margin-left: 2em;display: list-item;">Sử dụng tài khoản thư viện điền vào form dưới để mượn sách.</p>
								<p style= "color: blue; margin-left: 2em;display: list-item;">Lập tài khoản bằng cách gặp thủ thư ở thư viện trường.</p>
								<p style= "color: blue; margin-left: 2em;display: list-item;">Mã sách có thể tìm <a href="sach_list.php">tại đây</a>.</p>
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
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">ĐƠN MƯỢN SÁCH: </h2>
								<form method='post'>
									<div class="mt-10">
										<input type="text" name="gmail" placeholder="Nhập GMAIL" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập GMAIL'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" name="pass" placeholder="Nhập Mật Khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Mật Khẩu'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="code" placeholder="Nhập Mã Sách muốn mượn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Mã Sách muốn mượn'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="submit" name="submit" id="submit" value="Gửi yêu cầu">
									</div>
								</form>
							</div>
						</div>
		        	</div>
		        </div>
		    </div>
            <!-- End form Area -->
			
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
			</script>
		</body>
	</html>



