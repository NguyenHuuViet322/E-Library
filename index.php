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
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Trang chủ - Thư viện số trường THPT Thái Phiên</title>

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
			        //color: black;
			    }
			    
			    .single-footer-widget p {
			        color: #ccc;
			    }
			    
			    h1, h2 {
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

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
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
		                            echo "<li><a id='identity' href='javascipt:void(0)'>Xin chào, ".$_SESSION['user']."</a></li>";
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
							<h5 class="text-white text-uppercase">Thư viện số</h5>
							<h5 class="text-white text-uppercase">Trường THPT Thái Phiên</h5>
							<h1 class="text-uppercase">
								"Sách là tri thức"			
							</h1>
							<p class="text-white pt-20 pb-20">
								Thư viện số trường THPT Thái Phiên cung cấp thông tin về các sách tại thư viện, cùng các bài giảng, bài tập – tư liệu và đề thi kiểm tra, hỗ trợ quá trình nghiên cứu, giảng dạy và học tập. 
							</p>
						</div>
						<div class="col-lg-5 banner-right">
							<img class="img-fluid" src="img/header-img.png" alt="">
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start about Area -->
			<section class="section-gap info-area" id="about">
				<div class="container">				
					<div class="single-info row mt-40 align-items-center">
						<div class="col-lg-6 col-md-12 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="img/about-img.jpg" class="img-fluid info-img" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<h2 class="pb-30">Tại sao nên đọc sách.</h2>
								<p>
									Sách cung cấp một rừng tri thức, mở ra cho chúng ta một thế giới ý tưởng mới dưới góc nhìn và suy nghĩ của người khác. 								
								</p>
								<br>
								<p>
									Một nghiên cứu năm 2014 của Đại học Toronto cho thấy, việc đọc sách có thể ảnh hưởng tích cực đến tính cách của chúng ta bởi cách nó mở rộng quan điểm của chúng ta…					
								</p>
								<br>
								<p>
									Trung tâm Y tế Đại học Rush ở Chicago cho rằng những người thường xuyên đọc sách có thể sẽ có bộ não khỏe mạnh hơn, nhất là sau khi về già.							
								</p>
								<br>
								<p style="float:right;">Nguồn: <a href="https://cafef.vn/day-la-ly-do-vi-sao-doc-sach-moi-ngay-la-khoan-dau-tu-co-lai-nhat-cua-doi-nguoi-20180406135003271.chn">Cafef.vn</a></p>
								</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->
			
			<div id="borrow_status" class="w3-modal">
 			    <div class="w3-modal-content" style="border-radius: 15px;">
 			    
 			    <?php 
  			        if (isset($_SESSION['user']))
 			        {
 			            require_once 'dbconfig.php';
 			            
 			            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 			            
						$pdo->query("SET CHARACTER SET utf8");
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
							echo "<script>
								document.getElementById('identity').innerText = 'Xin chào, ".$result['HOTEN']."';
							</script>";
 			                echo "<hr>";
 			                echo "<p> <span style='color: #8c05ed;'>Họ tên:</span> ".$result['HOTEN']."</p>";
 			                echo "<p> <span style='color: #8c05ed;'>Ngày sinh:</span> ".date("d-m-Y",strtotime($result['NGAYSINH']))."</p>";
 			                if(substr($_SESSION['user'],0,2)=="GV") echo "<p> <span style='color: #8c05ed;'>Môn giảng dạy:</span> ".$result['LOP']."</p>";
							else
								echo "<p> <span style='color: #8c05ed;'>Mã học sinh:</span> ".$result['SACHMUON']."</p>";
 			                echo "<hr>";
							
							
							$d=strtotime("now");
							$history_handler = "INSERT INTO `access_history`(`time`, `acc`, `activity`, `note`) VALUES ('".date("Y-m-d H:i:sa", $d)."','".$result['ACC'].";".$result['HOTEN']."','".$index."','')";
							$pdo->query($history_handler);
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
			        <p style="margin-top: 0.5em;color: white;" >"Cảm ơn bạn đã ghé thăm! :3 "</p>
 			    </footer>

			   </div>
			   </div>
		
			<!-- Start fact Area -->
			<section class="fact-area relative section-gap" id="fact">
				<div class="overlay overlay-bg" style="overflow: hidden">
					<img src="img/THPT.jpg" style="width:100%;">
				</div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-8" id="fact-area-container">
							<div class="title text-center">
								<h1 class="mb-10">Bạn có biết?</h1>
								<p id="no_care">~~~</p>
							</div>
						</div>
					</div>						
				</div>	
			</section>
			<!-- End fact Area -->
			
			<!-- Start counter Area -->
			<section class="counter-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">20</h1>
								<p>là số sách 1 người Malaysia đọc trong năm</p>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">6</h1>
								<p>Là số giờ một người Mỹ dành ra để đọc sách mỗi tuần</p>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">60</h1>
								<p>Là số sách một người Do Thái đọc mỗi năm</p>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">5342</h1>
								<p>Là số sách có tại thư viện trường THPT Thái Phiên</p>								
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end counter Area -->
			
			<!-- Start course Area -->
			<section class="course-area section-gap" id="course">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Top sách nên đọc</h1>
								<p>"Tinh hoa của nhân loại"</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-course-carusel">
							<div class="single-course item">
								<img style="height: " class="img-fluid" src="img/c1.jpg" alt="">
								<p class="sale-btn">Lịch sử</p>
								<div class="details">
									<a href="sach_list.php"><h4>Nhân vật lịch sử Việt Nam</h4></a>	
									<p>
										Tác giả: Thùy Linh- Việt Trinh
									</p>
								</div>
							</div>
							<div class="single-course item">
								<img class="img-fluid" src="img/c2.jpg" alt="">
								<p class="sale-btn">Sách Self-help</p>
								<div class="details">
									<a href="sach_list.php"><h4>Quảng gánh lo đi và vui sống</h4></a>	
									<p>
										Tác giả: DALE CARNEGIE
									</p>
								</div>
							</div>
							<div class="single-course item">
								<img class="img-fluid" src="img/c3.jpg" alt="">
								<p class="sale-btn">Sách tri thức</p>
								<div class="details">
									<a href="sach_list.php"><h4>Albert Einstein là ai?</h4></a>	
									<p>
										Tác giả: Jess M.Brallier - Robert Andrew Parker
									</p>
								</div>
							</div>								
						</div>											
					</div>
				</div>	
			</section>
			<!-- End course Area -->
			
			<!-- Start call-to-action Area -->
			<section class="call-to-action-area section-gap">
				<div class="container">
					<div class="row justify-content-center top">
						<div class="col-lg-12">
							<h1 class="text-white text-center">Hãy chung tay xây dựng văn hoá đọc!</h1>						
						</div>
					</div>
				</div>	
			</section>
			<!-- End call-to-action Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="padding: 4em;">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p class="footer-text">
								    Đoàn TNCS Hồ Chí Minh trường THPT Thái Phiên
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>THPT Thái Phiên</h6>
								<p class="footer-text">258, Đà Nẵng, Ngô Quyền, HP</p>
								<p>c3thaiphienhp.elibrary@gmail.com</p>
								<div class="" id="mc_embed_signup">
									
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p class="footer-text">Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/doantruongthptthaiphien"><i class="fa fa-facebook"></i></a>
									<a href="https://www.youtube.com/channel/UC2cd-r4Yzwvt4xLxmFrrJwQ"><i class="fa fa-youtube-play"></i></a>
									<a href="https://c3thaiphienhp-elibrary.edu.vn/"><i class="fa fa-globe"></i></a>
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



