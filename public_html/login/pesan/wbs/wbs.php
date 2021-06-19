<!doctype html>
<html  lang="id">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
		<title>kembang malang</title>
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/animate.css" />
		<link rel="stylesheet" href="assets/css/hover-min.css">
		<link rel="stylesheet"  href="assets/css/datepicker.css" >
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />
		<style>
		.boxbeli{
            position: absolute;
    left: 25%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 15px 15px;
    width: 600px;

    background-color: rgba(255, 255, 255, 0.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
			

		}
        .boxharga{
            position: absolute;
    left: 80%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 15px 15px;
    width: 500px;

    background-color: rgba(255, 255, 255, 0.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
			

		}
		</style>

	</head>

	<body>

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.php">
									kembang<span>malang</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">	
                               
									<ul class="nav navbar-nav navbar-right">
                                         <ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="../index.php">home</a></li>
										<li>	  
										
										<img src="userlog (2).png" alt="portfolio image"/>
										<li class="smooth-menu"><a href=""> 
									
										<?php
											session_start();
											echo $_SESSION['nama'];
											?>	
										</a></li>

										
										<li>
											<button class="book-btn"><a href="../../index.html">log out</a> 
											</button>
										</li><!--/.project-btn--> 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->

        <!--about-us start -->
	<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
                                
                                    <div class="boxbeli">
                                    <img src="pe2.jpg" >
                                    
                                    <br><br>	<h3>Wisata Bunga Sidomulyo <span class="pull-right">Rp25.000</span></h3><br><br>
                                    <p>
												<span>
													<i class="fa fa-angle-right"></i> Jam Operasional
												</span>
												<i class="fa fa-angle-right"></i> 09.00 – 17.00
											</p>
                                            <br>
											<p>
												<span>
													<i class="fa fa-angle-right"></i>  alamat
												</span>
												<i class="fa fa-angle-right"></i>   Kec. Bumiaji, Kota Batu, Jawa Timur 65317
											 </p>
                                    
                                    </div>
                                    <div class="boxharga">
									<?php
									$_SESSION['harga']= '25000';
									$_SESSION['tempat']= 'Wisata Bunga Sidomulyo';
									
									?>
                                
                                    <?php
											echo 'email pemesan: ' ;
                                            echo $_SESSION['email'];
											
											?>
											<br>
											<?php
											echo 'nama pemesan: ' ;
                                            echo $_SESSION['nama'];
											?>
											<br><br><br>

											<form action="prosesp.php" method="post">
											tanggal
           		 <input type="date" name="tanggal" />
			           jumlah
                <input type="number" name="jumlah"/><br>
				<br><button class="book-btn" name="daftar"> pesan</button>
				</form>								
											
                                    
                                   
                                    </div>



									<div class="about-btn">
										
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section>

		
	
	
				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
		        	</ul>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->




		<script src="assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>


	</body>

</html>