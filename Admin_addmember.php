<?php
    if (!session_id()) session_start();
    if(isset($_SESSION['user'])) {
		            
    }
	else 
	{
	     header("location:Admin_login.php");
	}
?>
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
			    
			    h2 {
			        font-family: Patrick !important;
			    }
			    
			    a {
			        font-size:100% !important; 
			    }
			    
			    h5 {
    		        font-size: 1.5em !important;
    		        font-weight: bold !important;
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
			</style>
		</head>
		<body>
		    
		    <?php
         require_once 'dbconfig.php';
         require "autoload.php";
         require "config-cloud.php";
         
         include "src/PHPMailer.php";
         include "src/Exception.php";
         include "src/OAuth.php";
         include "src/POP3.php";
         include "src/SMTP.php";
         include "src/Helpers.php";
         
         use PHPMailer\PHPMailer\PHPMailer;
         use PHPMailer\PHPMailer\Exception;
         
         if(isset($_POST['submit'])){
         if(isset($_POST['gmail']) && isset($_POST['pass']) && isset($_POST['lop']) && isset($_POST['name']) && isset($_POST['ngaysinh'])){
             $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
             $sql = "SELECT COUNT(*) FROM `thanh_vien` WHERE `GMAIL` = '" . $_POST['gmail'] . "'";
             $process = $pdo->query($sql);
             $process->setFetchMode(PDO::FETCH_NUM);
             $statn = $process -> fetch();
             if ($statn[0] == 0) {
                 $add_member = "INSERT INTO `thanh_vien`(`HOTEN`, `NGAYSINH`, `SDT` , `LOP`, `PASS`, `GMAIL`, `SACHMUON`) VALUES ('" . $_POST['name'] . "','" . $_POST['ngaysinh'] . "','" . $_POST['sdt'] . "','" . $_POST['lop'] . "','" . $_POST['pass'] . "','" . $_POST['gmail'] . "',0)";
                 
                 $process = $pdo->query($add_member);
                 
                 $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                 try {
                     //Server settings
                     $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                     $mail->isSMTP();                                      // Set mailer to use SMTP
                     $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                     $mail->SMTPAuth = true;                               // Enable SMTP authentication
                     $mail->Username = 'lib.project12@gmail.com';                 // SMTP username
                     $mail->Password = 'Viet0302';                           // SMTP password
                     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                     $mail->Port = 587;                                    // TCP port to connect to
                     $mail->CharSet  = "utf-8";
 
                     //Recipients
                     $mail->setFrom('lib.project12@gmail.com', 'Thư Viện');
                     $mail->addAddress($_POST['gmail']);               // Name is optional
 
                     //Content
                     $mail->isHTML(true);                                  // Set email format to HTML
                     $mail->Subject = 'Account của bạn đã được tạo';
                     $mail->Body    = 'Tài khoản của bạn là Gmail. Mật khẩu của bạn là: '.$_POST['pass'];
 
                     $mail->send();
                     echo 'Message has been sent';
                 } catch (Exception $e) {
                     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                 }
             
                 echo "<script type='text/javascript'>alert('Tạo tài khoản thành công thành công!');</script>";
             }
             else
             {
                 echo "<script type='text/javascript'>alert('Gmail đã được sử dụng!');</script>";
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
				          <li class="menu-active"><a href="index.html">Trang chủ</a></li>
				           <li><a href="sach_list.php">Các đầu sách</a></li>
				          <li><a href="Admin.php">ADMIN</a></li>
				          <li><a href="logout.php">Đăng xuất</a></li>
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
								Tạo tài khoản			
							</h1>
							<p class="text-white pt-20 pb-20">
								Thủ thư có thể tạo tài khoản cho các thành viên mới.
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
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">Tạo Tài Khoản: </h2>
								<form method="post">
								    <div class="mt-10">
										<input type="text" name="name" placeholder="Nhập Họ và Tên" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Họ và Tên '" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="sdt" placeholder="Nhập SĐT" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập SĐT '" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="gmail" placeholder="Nhập GMAIL" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập GMAIL'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" name="pass" placeholder="Nhập Mật Khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Mật Khẩu'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="lop" placeholder="Nhập Lớp (Ghi rõ niên khóa)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Lớp'" required class="single-input">
									</div>
									<div class="mt-10">
									    <label for="ngaysinh">Nhập ngày sinh: </label>
										<input type="date" name="ngaysinh" id="ngaysinh">
									</div>
									<div class="mt-10">
										<input type="submit" name="submit" value="Tạo tài khoản">
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
									Nhóm Khoa Học Kỹ Thuật với mục tiêu đổi mới hệ thống thư viện
								</p>
								<p class="footer-text">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
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



