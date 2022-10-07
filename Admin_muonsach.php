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
		<title>Trang chủ - Thư viện trường THPT Thái Phiên</title>

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
			</style>
		</head>
		<body>

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
								Mượn sách			
							</h1>
							<p class="text-white pt-20 pb-20">
								Xem các yêu cầu mượn sách ở dưới.
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
							</div>
						</div>
		        	</div>
		        </div>
		    </div>
            <!-- End form Area -->
            
            <!-- Start book Area -->
            <div class="whole-wrap">
				<div class="container">
                    <div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">CÁC YÊU CẦU MƯỢN SÁCH: </h2>
								
							<!--	<div class='book'>
								    <div class='bia-content'>
								    <img src = 'https://res.cloudinary.com/dxtm7kh00/image/upload/v1601561486/sach1.jpg' class='bia'>
								    <img class='book-status' src='img/avai.png'>
								    </div>
								    <div class='infor'>
								        <h3 class='book-container'><span class='book-tieude'>Tên sách: </span>Lolite</h3>
								        <h3 class='book-container'><span class='book-tieude'>Tác giả: </span>Vladimir</h3>
								        <h3 class='book-container' style='border-bottom: 1px solid black;'><span class='book-tieude'>Mã sách: </span>1</h3>
								        <h3 class='book-container'><span class="book-tieude">Người mượn: </span>		Nguyễn Hữu Việt</h3>
								        <h3 class='book-container'><span class="book-tieude">Lớp: </span>12A13</h3>
								        <div class="button-group-area mt-10" style='margin: auto;'>
								            <form>
								                <input type='submit' id='submit1' class='submit1' class='genric-btn info-border' value="Cho mượn">
								            </form>
								        </div>
								    </div>
								</div> -->
								<?php
								    require_once 'dbconfig.php';
                                    require "autoload.php";
                                    require "config-cloud.php";
                                    include "src/Helpers.php";
                                    
                                    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
                                    $sql = "SELECT * FROM `request` WHERE `CONFIRM` = '0'";
                                    $proccess = $pdo -> query($sql);
                                    $proccess -> setFetchMode(PDO::FETCH_ASSOC);
                                    $i=1;
                                    while ($request = $proccess -> fetch()){
                                        $nguoimuon_sql = "SELECT * FROM `thanh_vien` WHERE `HOTEN` = '".$request['HOTEN']."'";
                                        $sach_sql      = "SELECT * FROM `sach` WHERE `IBSN` = '".$request['STT']."'";
                                        
                                        $process_muon = $pdo ->query($nguoimuon_sql);
                                        $process_sach = $pdo ->query($sach_sql);
                                        
                                        $result = $process_sach->fetch();
                                        $muon   = $process_muon->fetch();
                                        if($result['STATUS']>=1) $status="avai"; else $status="out";
                                        $bia = cloudinary_url("sach".$result['CODE'] , array("resource_type" => "image"));
                                        
                                        echo "<div class='book'>
								              <div class='bia-content'>
								              <img src = '".$bia."' class='bia'>
								              <img class='book-status' src='img/" . $status . ".png'>
								              </div>
								              <div class='infor'>
								                  <h3 class='book-container'><span class='book-tieude'>Tên sách: </span>" . $result['TENSACH'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Tác giả: </span>" . $result['TACGIA'] . "</h3>
								                  <h3 class='book-container' style='border-bottom: 1px solid black;'><span class='book-tieude'>Mã sách: </span>" . $result['IBSN'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Người mượn: </span>" . $muon['HOTEN'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Lớp: </span>" . $muon['LOP'] . "</h3>
								                  <div class='button-group-area mt-10' style='margin: auto;'>
								                     <form action='cho_muon.php' method='post'>
								                          <input type='hidden' name='code' value='".$result['IBSN']."'>
								                          <input type='hidden' name='muon' value='".$muon['HOTEN']."'>
								                          <input type='submit' id='submit' class='submit' class='genric-btn info-border' value='Cho mượn'>
								                     </form>
								                     <form action='ko_cho_muon.php' method='post'>
								                          <input type='hidden' name='code' value='".$result['IBSN']."'>
								                          <input type='hidden' name='muon' value='".$muon['HOTEN']."'>
								                          <input type='submit' id='submit' class='submit' class='genric-btn info-border' value='Xóa yêu cầu'>
								                     </form>
								                  </div>
								              </div>
								          </div>";
								          $i=$i+1;
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



