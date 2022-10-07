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
				
				tbody {
					background-color: #a8d3ff;
				}
			    
			    @media only screen and (max-width: 991px) {
                    .book-container {
			            font-size: 1.5em;
			        }
			    }
			    
			    @keyframes hover{
			        from {background-color: #2aa3cb} 
			        to {background-color:blue}
			    }
			    
			    @keyframes unhover{
			        from {background-color: blue} 
			        to {background-color:#2aa3cb}
			    }
			    
			    @keyframes fadein {
  			        from { opacity: 0; }
  			        to   { opacity: 1; }
                }
			    
			    input[type='submit']:not(.w3-bar-item w3-button w3-white){
					font-weight: bold;
			        margin-top: 1em !important;
			        padding: 1em;
			        font-size: 1em;
			        text-align: center;
			        width: 40%;
			        border: 1px solid lightblue;
			        border-radius:20px;
			        color: white;
			        background-color: #2aa3cb;
			        animation-name: unhover;
			        animation-duration:0.25s;
			        margin: auto;
			    }
			    
			    input[type='submit']:hover:not(.w3-bar-item w3-button w3-white){
			        animation-name: hover;
			        animation-duration:0.25s;
			        background-color: blue;
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
			        //color: black;
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
					font-weight: 500;
                	text-align: center;
                    word-wrap:break-word;
                    border: 1px solid #ddd;
                    padding: 8px;
                }
                
                #bang_tai_lieu tr:nth-child(even){
					font-weight: 500;
					text-align: center;
                    background-color: #f2f2f2;
                }
                
                #bang_tai_lieu tr:hover {background-color: #ddd;}
                
                #bang_tai_lieu th {
					font-weight: bold;
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: center;
                    background-color: #242bad;
                    color: white;
                }
                

        
        #name {
            border-bottom: 1px solid grey;
            color: blue;
        }
        
        #status {
            z-index: 2;
        }
        
        button:not(.w3-bar-item, #mobile-nav-toggle) {
            border-radius: 20px;
            width: 35%;
            margin-left: 10%;
            margin-top: 1em;
        }
        
        button:hover:not(.w3-bar-item, #mobile-nav-toggle) {
            box-shadow: 1px 1px;
        }
        
        tr {
           // background-color: #c3eded;
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
								Lịch sử truy cập			
							</h1>
							<p class="text-white pt-20 pb-20">
								Thủ thư có thể kiểm tra lịch sử truy nhập ở dưới.
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
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">Lịch sử truy cập: </h2>
								<p style= "color: blue; margin-left: 2em;display: list-item;">Xem lịch sử truy cập riêng của từng học sinh học theo từng mục.</p>
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
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">TÌM KIẾM LỊCH SỬ: </h2>
								<form action="#" method="post">
									<div class="mt-30">
										<label for="student-name">Tên học sinh</label>
										<input type="text" name="book-name" placeholder="Nhập tên học sinh (Không bắt buộc)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên học sinh (Không bắt buộc)'"  class="single-input">
									</div>
									<div class="mt-30" style="border-bottom:1px solid blue;">
										<label for="type">Tính năng: </label>
										<div class="form-select" id="default-select">
											<select name="type">
											    <option value="1">Tất cả</option>
												<option value="Bài giảng">Trang chủ</option>
												<option value="Tư liệu - Bài tập">Tài nguyên số</option>
												<option value="Đề thi kiểm tra">Danh mục sách</option>
											</select>
										</div>
									</div>
									<div class="mt-30">
										<input type="submit" name="submit" id="submit" value="Check lịch sử">
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
								<div> 
								    <table id='bang_tai_lieu' style= "table-layout: fixed;">
								        <tr style="height:20%">
								            <th style="width: 20%;">Tên học sinh</th>
								            <th style="width: 30%;">Thời gian</th>
											<th style="width: 20%;">Hoạt động</th>
											<th style="width: 30%;">Ghi chú</th>
								        </tr>
								<?php
								    require_once 'dbconfig.php';
                                    require "autoload.php";
                                    require "config-cloud.php";
                                    include "src/Helpers.php";
                                    
                                    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
                                    $pdo->query("SET CHARACTER SET utf8");
										
                                    if(isset($_POST['submit'])){
                                        $dem = 0; $ten="";$theloai="";
                                        if ($_POST['student-name'] != "") 
                                        {
                                            $dem = $dem + 1;
                                            $ten = "`TENTAILIEU` LIKE '%".$_POST['student-name']."%' AND ";
                                        }
                                        
                                        if ($_POST['type']!="1") 
                                        {
                                            $dem = $dem + 1;
                                            $theloai = "`THELOAI` = '".$_POST['type']."' AND ";
                                        }
                                        
                                        $sql = "SELECT * FROM `access_history` WHERE " . $ten . $theloai . " 1 ORDER BY `time` ";
                                        echo "<p id='determiner' style='display:none'>1</p>";
                                        
                                    }else {
                                        $sql = "SELECT * FROM `access_history` ORDER BY `time` LIMIT 20";
                                        echo "<p id='determiner' style='display:none'>0</p>";
                                    }
									
                                    
                                    $proccess = $pdo -> query($sql);
                                    $proccess -> setFetchMode(PDO::FETCH_ASSOC);
                                    $i=1;
                                    while ($result = $proccess -> fetch()){
										$stdInfo = explode(";", $result['acc']);
										
                                        echo "
                                        <tr>
								            <td>".$stdInfo[1]."</th>
								            <td>".date("d-m-y H:i:s",strtotime($result['time']))."</th>
											<td>".$result['activity']."</th>
								            <td>".$result['note']."</th>
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



