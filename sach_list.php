<?php
    if (!session_id()) session_start();
	$pageIndex = 1;
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
		<title>Danh mục sách - Thư viện trường THPT Thái Phiên</title>

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
			     //   color: black;s
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
			        border: 2px solid #00c0ff;
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
        
        button:not(.w3-bar-item, #mobile-nav-toggle) {
            border-radius: 20px;
            width: 60%;
			font-weight: bold;
            margin-left: 20%;
			padding: 0.5em;
            margin-top: 3em;
			transition: 0.25s;
        }
        
        button:hover:not(.w3-bar-item) {
            box-shadow: 2px 2px;
        }
        
			</style>
		</head>
		<body onresize="">
        <script>
			    function defineHeight(i)
			    {
					if (!document.getElementById("bia".concat(i)).complete) setTimeOut(defineHeight(i), 1000);
					else
					{
			        	var height = document.getElementById("bia".concat(i)).offsetHeight;
			        	height = height + 30;
			        	height = height.toString();
			        	console.log(height.concat("px"));
			        	document.getElementById("book".concat(i)).style.height = height.concat("px");
					}
			    }
			
				function checkImage(i) {
					while() {}
					defineHeight(i);
				}
			</script>
			  			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" m/></a>
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
								if (substr($_SESSION['user'],0,2) == "GV") $name = "Giáo viên";
									else $name = "Học sinh";
								
                                if(isset($_SESSION['user'])) {
                                    echo "<li><a href='javascipt:void(0)' id = 'checkstatus' onclick='openModal();'>Tài khoản</a></li>";
		                            echo "<li><a id='indentity' href='javascipt:void(0)'>Xin chào, ".$name."</a></li>";
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
								Danh mục sách			
							</h1>
							<p class="text-white pt-20 pb-20" style="font-style: italic;">
								“Đọc sách hay cũng giống như trò chuyện với các bộ óc tuyệt vời nhất của những thế kỷ đã trôi qua” - Rene Descarte. 
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
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">DANH MỤC SÁCH: </h2>
								<p style= "color: blue; margin-left: 2em;display: list-item;">Đây là nơi tìm kiếm thông tin về các cuốn sách có sẵn trong thư viện trường THPT Thái Phiên: tên sách, tác giả, nhà xuất bản và lời bình của các học sinh trường THPT Thái Phiên về nội dung cuốn sách.</p>
								<p style= "color: blue; margin-left: 2em;display: list-item;">Nhập các thông tin cần thiết để tìm kiếm sách phù hợp.</p>
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
								<h2 class="mb-30" style="color: blue; border-bottom: 1px solid blue;">TRA CỨU SÁCH: </h2>
								<form action="#" method="post">
									<div class="mt-30" style="border-bottom:1px solid blue;">
										<label for="type">   Loại sách: </label>
										<div class="form-select" id="default-select">
											<select name="type">
												<option value="ALL">Tất cả</option>
												<option value="1">Sách về địa lý, lịch sử...</option>
												<option value="2">Sách về chính trị học, kinh tế học, luật học, giáo dục, thương mại, vận tải, phong tục, nghi thức,...</option>
												<option value="3">Sách về tin học, truyền thông, báo chí, xuất bản...</option>
												<option value="4">Sách về triết học, tâm lý, tôn giáo.</option>
												<option value="5">Sách về khoa học.</option>
												<option value="6">Sách về ngôn ngữ, ngoại ngữ.</option>
												<option value="7">Sách về nghệ thuật, mỹ thuật, trang trí.</option>
												<option value="8">Sách về văn học.</option>
											</select>
										</div>
									</div>
									
									<div class="mt-30">
										<label for="book-name">   Tên sách: </label>
										<input type="text" name="book-name" placeholder="Nhập tên sách (Không bắt buộc)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên sách (Không bắt buộc)'"  class="single-input">
									</div>
									<div class="mt-30">
										<label for="book-tacgia">   Tác giả: </label>
										<input type="text" name="book-tacgia" placeholder="Nhập tác giả (Không bắt buộc)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tác giả (Không bắt buộc)'"  class="single-input">
									</div>
									<div class="mt-30">
										<label for="book-code">   Mã sách: </label>
										<input type="text" name="book-code" placeholder="Nhập mã sách (Không bắt buộc)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập mã sách (Không bắt buộc)'"  class="single-input">
									</div>
									
									<div class="mt-30" style="border-bottom:1px solid blue;">
										<label for="sort">   Sắp xếp theo: </label>
										<div class="form-select" id="default-select">
											<select name="sort">
												<option value="IBSN">Mã sách</option>
												<option value="TENSACH">Tên sách</option>
												<option value="TACGIA">Tác giả</option>
											</select>
										</div>
									</div>
									<div class="mt-30">
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
									$pdo->query("SET CHARACTER SET utf8");
								
                                    if(isset($_POST['submit'])){
                                        $dem = 0; $ten="";$tacgia="";$theloai="";$code="`CODE` != 0 AND";$type = "1 AND";
										if(isset($_POST['type'])){
											$type = "`IBSN` = '".$_POST['type']."' AND ";
										}
										
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
                                        if ($_POST['book-code'] != 0)
                                        {
                                            $dem = $dem + 1;
                                            $code = "`CODE` LIKE '%".$_POST['book-code']."%' AND ";
                                        }
                                        
                                        $sql = "SELECT DISTINCT * FROM `sach` WHERE " . $ten . $type . $tacgia . $code ." 1 GROUP BY `TENSACH` ORDER BY `" . $_POST['sort'] . "` ";

                                        echo "<p id = 'determiner' style='display:none'>1</p>";
										echo "<script>document.getElementById('pIndex4').style.display='none';</script>";
										echo "<script>document.getElementById('pIndex5').style.display='none';</script>";
                                        
                                    }else {
                                        $sql = "SELECT DISTINCT * FROM `sach` GROUP BY `TENSACH` ORDER BY CODE";
                                        echo "<p id = 'determiner' style='display:none'>0</p>";
                                    }
                                    
                                    $proccess = $pdo -> query($sql);
                                    $proccess -> setFetchMode(PDO::FETCH_ASSOC);
                                    $i=1;
                                    while ($result = $proccess -> fetch()){		
										if ($i <= $pageIndex*5 && $i > $pageIndex*5-5) {$display="block";$img=$result['CODE'];}
										else $display = "none";
										
                                        echo "<div class='book' id = 'book".$i."' style='display:".$display."'>
								              <div class='bia-content'>
											 
								              <img src = 'Book - Cover/".$img.".jpg' onerror='this.error=null; this.src=`img/default.jpg`;' class='bia' id='bia".$i."' alt='".$result['CODE']."'>
								              </div>
								              <div class='infor'>
								                  <h3 class='book-container'><span class='book-tieude'>Tên sách: </span>" . $result['TENSACH'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Tác giả: </span>" . $result['TACGIA'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Mã sách: </span>" . $result['CODE'] . "</h3>
								                  <h3 class='book-container'><span class='book-tieude'>Nhà xuất bản: </span>" . $result['THELOAI'] . "</h3>
								                  <div id='comment_btn'>";
								        if (isset($_SESSION['user']))
										{
											if($result['GIOITHIEU']!="")
								              echo "<a href='".$result['GIOITHIEU']."'  target='_blank' rel='noreferrer noopener'><button id='myBtn'>Xem Review</button></a>";						
											
										}
								        else
								              echo "<a href='javascript:void(0)' onclick='loginRequired();'><button id='myBtn'>Xem Review</button></a>";
								        echo "      </div>
								              </div>
								          </div>";
								        //echo "<script>checkImage(".$i.");</script>";
								        $i++;
                                    }
								?>
							</div>
						</div>
					
						<div class="page_list">
							<a <?php 
								if($pageIndex==1) echo "href='javascript:void(0)'";
							?>>&laquo;</a>
							<?php 
								echo "<a class='active' id='pIndex1'>".$pageIndex."</a>";
								echo "<a id='pIndex2' onclick = 'changePage(".$pageIndex.",".($pageIndex+1).");'>".($pageIndex+1)."</a>";
								echo "<a id='pIndex3' onclick = 'changePage(".$pageIndex.",".($pageIndex+2).");'>".($pageIndex+2)."</a>";
								if ($pageIndex+3<364)
									echo "<a>&#8230;</a>";
								echo "<a id='pIndex4' onclick = 'changePage(".$pageIndex.",187);'>187</a>";
								echo "<a id='pIndex5' onclick = 'changePage(".$pageIndex.",188);'>188</a>";
							?>
							<a href="#">&raquo;</a>
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
				    $pdo->query("SET CHARACTER SET utf8");
				   
			        if (isset($_SESSION['user'])) {
			            while ($result = $process->fetch())
 			            {
							echo "<script>
								document.getElementById('indentity').innerText = 'Xin chào, ".$result['HOTEN']."';
							</script>";
 			                echo "<hr>";
 			                echo "<p> <span style='color: #8c05ed;'>Họ tên:</span> ".$result['HOTEN']."</p>";
 			                echo "<p> <span style='color: #8c05ed;'>Ngày sinh:</span> ".date("d-m-Y",strtotime($result['NGAYSINH']))."</p>";
 			                if(substr($_SESSION['user'],0,2)=="GV") echo "<p> <span style='color: #8c05ed;'>Môn giảng dạy:</span> ".$result['LOP']."</p>";
							else
								echo "<p> <span style='color: #8c05ed;'>Mã học sinh:</span> ".$result['SACHMUON']."</p>";
 			                echo "<hr>";
							
							$d=strtotime("now");
							$history_handler = "INSERT INTO `access_history`(`time`, `acc`, `activity`, `note`) VALUES ('".date("Y-m-d H:i:sa", $d)."','".$result['ACC'].";".$result['HOTEN']."','".$sachList."','')";
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
			</script>
			<script>
			    function loginRequired()
			    {
			        alert("Bạn cần đăng nhập để truy cập phần Review!");
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
                };
				
				function changePage(pageIndex_old, pageIndex) {
					for (var i = pageIndex_old*5-4; i <= pageIndex_old*5;i++)
					{
						document.getElementById("book".concat(i)).style.display = "none";
					}
					for (var i = pageIndex*5-4; i <= pageIndex*5;i++)
					{
						document.getElementById("book".concat(i)).style.display = "block";
						document.getElementById("bia".concat(i)).src = "Book - Cover/".concat(document.getElementById("bia".concat(i)).alt).concat(".jpg");
					}
					
					if (pageIndex > 1 && pageIndex <= 184) 
					{
						document.getElementById("pIndex1").innerText = pageIndex-1;
						document.getElementById("pIndex2").innerText = pageIndex;
						document.getElementById("pIndex3").innerText = pageIndex+1;
					}
					else
						if (pageIndex == 1)
						{
							document.getElementById("pIndex1").innerText = 1;
							document.getElementById("pIndex2").innerText = 2;
							document.getElementById("pIndex3").innerText = 3;
						}
					else
					{
						document.getElementById("pIndex1").innerText = 184;
						document.getElementById("pIndex2").innerText = 185;
						document.getElementById("pIndex3").innerText = 186;
					}
					
					for (var i=1; i<=5; i++)
					{
						document.getElementById("pIndex".concat(i)).setAttribute( "onClick", "changePage(".concat(pageIndex).concat(",").concat(document.getElementById("pIndex".concat(i)).innerText).concat(");") );
						if (document.getElementById("pIndex".concat(i)).innerText == pageIndex)
							document.getElementById("pIndex".concat(i)).classList.add("active");
						else
							document.getElementById("pIndex".concat(i)).classList.remove("active");
					}
					
					$('html, body').animate({ scrollTop: $('#result_place').offset().top - 40}, 1000);
				};
			</script>
		</body>
	</html>

