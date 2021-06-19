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
			.har{
				position: absolute;
        right: 0;
        top: 50px;
			}

		</style>
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="1c438f65-5c1a-471d-8952-8d64e6412309";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	</head>

	<body>

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
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
										<li class="smooth-menu"><a href="#home">home</a></li>
										<li class="smooth-menu"><a href="#gallery">gallery</a></li>
										<li class="smooth-menu"><a href="#Tiket">Tiket</a></li>
											<li>
										
                                        <img src="userlog (2).png" alt="portfolio image"/>
										<li class="smooth-menu"><a href=""> 
									
										<?php
											session_start();
											echo $_SESSION['nama'];
											?>	
										</a></li>
										
										<li>
										    
											<button class="book-btn"><a href="../index.html">logout</a> 
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
									<h2>
										Batu Flower Garden

									</h2>
									<div class="about-btn">
										<button  class="about-view" >
											<a href="pesan/fw/fw.php"><h4>booking</h4></a>	
										</button>
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
		<section id="gallery" class="gallery">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2>
							top destination
						</h2>
						<p>
							Foto destinasi terbaik di Malang  
						</p>
					</div><!--/.gallery-header-->
					<div class="gallery-box">
						<div class="gallery-content">
						  	<div class="filtr-container">
						  		<div class="row">

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g1.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="fw.php">
													Batu Flower Garden
												</a>
											
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g2.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="tws.html">Taman Wisata Selecta</a>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g3.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="fws.php">
													FLORAWISATA SAN TERRA
												</a>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g4.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="apel.php">
													Wisata Petik Apel Agro Rakyat 
												</a>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g5.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="tbc.php">
													Taman Bunga Coban Talun
												</a>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-8">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g6.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="wbs.php">
														Wisata Bunga Sidomulyo
												</a>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  		</div><!-- /.row -->

						  	</div><!-- /.filtr-container-->
						</div><!-- /.gallery-content -->
					</div><!--/.galley-box-->
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.gallery-->
		<!--gallery end-->
	<!--packages start-->
	<section id="Tiket" class="packages">
		<div class="container">
			<div class="gallary-header text-center">
				
			</div><!--/.gallery-header-->
			<section id="pack" class="packages">
				<div class="container">
					<div class="gallary-header text-center">
						<h2>
							pesan tiket
						</h2>
						<p>
							pesan tiket secara online disini  
						</p>
					</div><!--/.gallery-header-->
					<div class="packages-content">
						<div class="row">
	
							<div class="col-md-4 col-sm-6">
								<div class="single-package-item">
									<img src="assets/images/packages/p1.jpg" alt="package-place">
									<div class="single-package-item-txt">
										<h3>batu Flower Garden </h3>
										<div class="packages-para">
											<p>
												<span>
													<i class="fa fa-angle-right"></i> Jam Operasional
												</span>
												<i class="fa fa-angle-right"></i>  09.00-16.00 WIB
											</p>
											<p>
												<span>
													<i class="fa fa-angle-right"></i>  alamat
												</span>
												<i class="fa fa-angle-right"></i> Kec. Batu, Kota Batu, Jawa Timur 65151
											 </p>
										</div><!--/.packages-para-->
										<div class="packages-review">
										</div><!--/.packages-review-->
										<div class="about-btn">
											<h3><span class="har">Rp37.000</span></h3>
											<button  class="about-view packages-btn">
											<a href="pesan/fw/fw.php"><h5>book now</h5></a>
											</button>
										</div><!--/.about-btn-->
										
									</div><!--/.single-package-item-txt-->
								</div><!--/.single-package-item-->
	
							</div><!--/.col-->
	
							<div class="col-md-4 col-sm-6">
								<div class="single-package-item">
									<img src="assets/images/packages/p2.jpg" alt="package-place">
									<div class="single-package-item-txt">
										<h3>taman wisata selecta</h3>
										<div class="packages-para">
											<p>
												<span>
													<i class="fa fa-angle-right"></i> Jam Operasional
												</span>
												<i class="fa fa-angle-right"></i>  06.00 – 17.00 WIB
											</p>
											<p>
												<span>
													<i class="fa fa-angle-right"></i>  alamat
												</span>
												<i class="fa fa-angle-right"></i>  Kec. Bumiaji, Kota Batu, Jawa Timur 65336
											 </p>
										</div><!--/.packages-para-->
										<div class="packages-review">
								
										</div><!--/.packages-review-->
										<div class="about-btn">
											<h3><span class="har">Rp40.000</span></h3>
											<button  class="about-view packages-btn">
											<a href="pesan/tws/twf.php"><h5>book now</h5></a>
											</button>
										</div><!--/.about-btn-->
									</div><!--/.single-package-item-txt-->
								</div><!--/.single-package-item-->
	
							</div><!--/.col-->
							
							<div class="col-md-4 col-sm-6">
								<div class="single-package-item">
									<img src="assets/images/packages/p3.jpg" alt="package-place">
									<div class="single-package-item-txt">
										<h3>flora wisata san terra </h3>
										<div class="packages-para">
											<p>
												<span>
													<i class="fa fa-angle-right"></i> Jam Operasional
												</span>
												<i class="fa fa-angle-right"></i>  07.00–18.00
											</p>
											<p>
												<span>
													<i class="fa fa-angle-right"></i>  alamat
												</span>
												<i class="fa fa-angle-right"></i> Kec. Pujon, Malang, Jawa Timur 65391
											 </p>
										</div><!--/.packages-para-->
										<div class="packages-review">
											<p>
											</p>
										</div><!--/.packages-review-->
										<div class="about-btn">
											<h3><span class="har">Rp20.000</span></h3>
											<button  class="about-view packages-btn">
											<a href="pesan/fws/fws.php"><h5>book now</h5></a>
											</button>
										</div><!--/.about-btn-->
									</div><!--/.single-package-item-txt-->
								</div><!--/.single-package-item-->
	
							</div><!--/.col-->
							
							<div class="col-md-4 col-sm-6">
								<div class="single-package-item">
									<img src="assets/images/packages/p4.jpg" alt="package-place">
									<div class="single-package-item-txt">
										<h3>taman bunga coban talun</h3>
										<div class="packages-para">
											<p>
												<span>
													<i class="fa fa-angle-right"></i> Jam Operasional
												</span>
												<i class="fa fa-angle-right"></i>  07.00 – 17.00
											</p>
											<p>
												<span>
													<i class="fa fa-angle-right"></i>  alamat
												</span>
												<i class="fa fa-angle-right"></i>  Kota Batu, Jawa Timur
											 </p>
										</div><!--/.packages-para-->
										<div class="packages-review">
										</div><!--/.packages-review-->
										<div class="about-btn">
											<h3><span class="har">Rp10.000</span></h3>
											<button  class="about-view packages-btn">
											<a href="pesan/tbc/tbc.php"><h5>book now</h5></a>
											</button>
										</div><!--/.about-btn-->
									</div><!--/.single-package-item-txt-->
								</div><!--/.single-package-item-->
	
							</div><!--/.col-->
							
							<div class="col-md-4 col-sm-6">
								<div class="single-package-item">
									<img src="assets/images/packages/p5.jpg" alt="package-place">
									<div class="single-package-item-txt">
										<h3> wisata bunga sidomulyo</h3>
										<div class="packages-para">
											<p>
												<span>
													<i class="fa fa-angle-right"></i> Jam Operasional
												</span>
												<i class="fa fa-angle-right"></i>  09.00 – 17.00
											</p>
											<p>
												<span>
													<i class="fa fa-angle-right"></i>  alamat
												</span>
												<i class="fa fa-angle-right"></i> Kec. Bumiaji, Kota Batu, Jawa Timur 65317
											 </p>
										</div><!--/.packages-para-->
										<div class="packages-review">
											
										</div><!--/.packages-review-->
										<div class="about-btn">
											<h3><span class="har">Rp25.000</span></h3>
											<button  class="about-view packages-btn">
											<a href="pesan/wbs/wbs.php"><h5>book now</h5></a>
											</button>
										</div><!--/.about-btn-->
									</div><!--/.single-package-item-txt-->
								</div><!--/.single-package-item-->
	
							</div><!--/.col-->
							
							<div class="col-md-4 col-sm-6">
								<div class="single-package-item">
									<img src="assets/images/packages/p6.jpg" alt="package-place">
									<div class="single-package-item-txt">
										<h3>Wisata Petik Apel Agro Rakyat </h3>
										<div class="packages-para">
											<p>
												<span>
													<i class="fa fa-angle-right"></i>Jam Operasional
												</span>
												<i class="fa fa-angle-right"></i>  07.00-18.00
											</p>
											<p>
												<span>
													<i class="fa fa-angle-right"></i>  alamat
												</span>
												<i class="fa fa-angle-right"></i>  Kec. Batu, Malang, Jawa Timur 65317
											 </p>
										</div><!--/.packages-para-->
										<div class="packages-review">
											
										</div><!--/.packages-review-->
										<div class="about-btn">
											<h3><span class="har">Rp25.000</span></h3>
											<button  class="about-view packages-btn">
											<a href="pesan/apel/apel.php"><h5>book now</h5></a>
											</button>
										</div><!--/.about-btn-->
									</div><!--/.single-package-item-txt-->
								</div><!--/.single-package-item-->
	
							</div><!--/.col-->
	
						</div><!--/.row-->
					</div><!--/.packages-content-->
				</div><!--/.container-->
	
			</section><!--/.packages-->
			<!--packages end-->
		
		
		

		<!-- footer-copyright start -->
	
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