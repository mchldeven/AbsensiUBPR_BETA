<?php

	$fullurl = ($_SERVER['PHP_SELF']);
	$trimmed = trim($fullurl, ".php");
	$canonical = rtrim($trimmed, '/' . '/?');

	if(isset($_COOKIE['COOKIES_MEMBER']) && isset($_COOKIE['COOKIES_COOKIES'])){
	    header("location:./");
	} else {

	?>

	<!DOCTYPE html>
	<html lang="id-ID" xml:lang="id-ID">

	    <head>

	    	<!--Viewport -->
	    	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	    	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
	    	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>

	    	<!--Canonical-->
	    	<meta content="all" name="robots"/>
	    	<link href="<?php echo $site_url; ?>" rel="home"/>
	    	<link href="<?php echo $site_url; ?><?php echo $fullurl; ?>" rel="canonical"/>

	    	<!--Title-->
	    	<title><?php echo $site_name; ?></title>
	    	<meta name="description" content="<?php echo $site_description; ?>"/>
	    	<meta name="keywords" content="absensi online, aplikasi absensi, aplikasi absensi online, sistem absensi online, absensi online pemerintah, absensi online perusahaan"/>

	    	<!--OG-->
	    	<meta content="website" property="og:type"/>
	    	<meta content="<?php echo $site_name; ?>" property="og:title"/>
	    	<meta content="<?php echo $site_description; ?>" property="og:description"/>
	    	<meta content="<?php echo $site_url; ?><?php echo $fullurl; ?>" property="og:url"/>
	    	<meta content="<?php echo $site_name; ?>" property="og:site_name"/>
	    	<meta content="<?php echo $site_name; ?>" property="og:headline"/>
	    	<meta content="<?php echo $site_url; ?>/content/logo/bpr123.png" property="og:image"/>
	    	<meta content="1920" property="og:image:width"/>
	    	<meta content="1080" property="og:image:height"/>
	    	<meta content="id_ID" property="og:locale"/>
	    	<meta content="en_US" property="og:locale:alternate"/>
	    	<meta content="true" property="og:rich_attachment"/>
	    	<meta content="true" property="pinterest-rich-pin"/>
	    	<meta content="" property="fb:app_id"/>
	    	<meta content="" property="fb:pages"/>
	    	<meta content="" property="fb:admins"/>
	    	<meta content="" property="fb:profile_id"/>
	    	<meta content="<?php echo $site_name; ?>" property="article:author"/>
	    	<meta content="summary_large_image" name="twitter:card"/>
	    	<meta content="@universalbpr" name="twitter:site"/>
	    	<meta content="@universalbpr" name="twitter:creator"/>
	    	<meta content="<?php echo $site_url; ?><?php echo $fullurl; ?>" property="twitter:url"/>
	    	<meta content="<?php echo $site_name; ?>" property="twitter:title"/>
	    	<meta content="<?php echo $site_description; ?>" property="twitter:description"/>
	    	<meta content="<?php echo $site_url; ?>/content/logo/bpr123.png" property="twitter:image"/>

	    	<!--Webapp-->
	    	<link href="<?php echo $site_url; ?>/manifest.json" rel="manifest"/>
	    	<meta content="<?php echo $site_url; ?>" name="msapplication-starturl"/>
	    	<meta content="<?php echo $site_url; ?>" name="start_url"/>
	    	<meta content="<?php echo $site_name; ?>" name="application-name"/>
	    	<meta content="<?php echo $site_name; ?>" name="apple-mobile-web-app-title"/>
	    	<meta content="<?php echo $site_name; ?>" name="msapplication-tooltip"/>
	    	<meta content="#003b70" name="theme_color"/>
	    	<meta content="#003b70" name="theme-color"/>
	    	<meta content="#FFFFFF" name="background_color"/>
	    	<meta content="#003b70" name="msapplication-navbutton-color"/>
	    	<meta content="#003b70" name="msapplication-TileColor"/>
	    	<meta content="#003b70" name="apple-mobile-web-app-status-bar-style"/>
	    	<meta content="true" name="mssmarttagspreventparsing"/>
	    	<meta content="yes" name="apple-mobile-web-app-capable"/>
	    	<meta content="yes" name="mobile-web-app-capable"/>
	    	<meta content="yes" name="apple-touch-fullscreen"/>
	    	<link href="<?php echo $site_url; ?>/bpr123.png" rel="apple-touch-icon"/>
	    	<link href="<?php echo $site_url; ?>/bpr123.png" rel="shortcut icon" type="image/x-icon"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/bpr123.png" rel="icon" sizes="32x32"/>
	    	<meta content="<?php echo $site_url; ?>/content/logo/bpr123.png" name="msapplication-TileImage"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/bpr123.png" rel="apple-touch-icon"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/bpr123.png" rel="icon" sizes="48x48"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/bpr123.png" rel="icon" sizes="72x72"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/bpr123.png" rel="icon" sizes="96x96"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/bpr123.png" rel="icon" sizes="168x168"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/bpr123.png" rel="icon" sizes="192x192"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/bpr123.png" rel="icon" sizes="512x512"/>

	    	<!--Author-->
	    	<meta content="<?php echo $site_name; ?>" name="author" />
	    	<meta content="ITUBPR 2022" name="publisher"/>

	    	<!--verification-->
	    	<meta name="yandex-verification" content=""/>
	    	<meta name="p:domain_verify" content=""/>
	    	<meta name="msvalidate.01" content=""/>
	    	<meta name="google-site-verification" content="" />
	    	<meta name="dmca-site-verification" content=""/>
	    	<meta name="facebook-domain-verification" content=""/>

	    	<!--Location-->
	    	<meta content="ID" name="geo.region"/>
	    	<meta content="Indonesia" name="geo.country"/>
	    	<meta content="Indonesia" name="geo.placename"/>
	    	<meta content="x;x" name="geo.position"/>
	    	<meta content="x,x" name="ICBM"/>

	    	<!--resource-->
	    	<link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"/>
	    	<link href="//api.github.com" rel="preconnect dns-prefetch"/>
	    	<link href="//api.mapbox.com" rel="preconnect dns-prefetch"/>
	    	<link href="//cdnjs.cloudflare.com" rel="preconnect dns-prefetch"/>
	    	<link href="//unpkg.com" rel="preconnect dns-prefetch"/>
			<link href="//kit.fontawesome.com" rel="preconnect dns-prefetch"/>
			
            <!--cssfont-->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet"/>

            <!--css-->
            <link href="mod/assets-index/css/scroll.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/animate.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/meanmenu.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/magnific-popup.min.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/owl.carousel.min.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/odometer.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/slick.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/style.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/responsive.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/footer.css" rel="stylesheet"/>

	    </head>

	    <body>

	        <!--HEADER-->
	        <header id="header">
	        	<div class="startp-mobile-nav fixed">
	        		<div class="logo">
	        			<a href="../content/bpr123png.png"><img src="<?php echo $site_url; ?>/content/<?php echo $site_logo; ?>" class="home-logo"></a>
	        		</div>
	        	</div>
	        	<div class="startp-nav fixed">
	        		<div class="container">
	        			<nav class="navbar navbar-expand-md navbar-light">
	        				<a class="navbar-brand" href="./"><img src="<?php echo $site_url; ?>/content/<?php echo $site_logo; ?>" class="home-logo"></a>
	        				<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
	        					<ul class="navbar-nav nav ml-auto">
	        						<!--<li class="nav-item"><a href="#panel"><i aria-hidden="true" class="fa fa-home"></i>PERATURAN ABSEN</a></li>-->
	        						<!--<li class="nav-item"><a href="#aplikasi"><i class="fab fa-android"></i> APLIKASI</a></li>-->
	        						<!--<li class="nav-item"><a href="#fitur"><i aria-hidden="true" class="fa fa-star"></i> FITUR</a></li>-->
	        						<!--<li class="nav-item"><a href="#kontak"><i aria-hidden="true" class="fa fa-comments"></i> KONTAK</a></li>-->
	        						
	        			</nav>
	        		</div> 
	        	</div>
	        </header>

	        <!--BERANDA-->
	        <div class="main-banner">
	        	<div class="d-table">
	        		<div class="d-table-cell c">
	        			<div class="container">
	        				<div class="row h-100 justify-content-center align-items-center">
	        					<div class="col-lg-5">
	        						<div class="hero-content text-center text-white">
	        							<p>
	        								<img src="<?php echo $site_url; ?>/content/logo/bpr123.png" class="img-fluid" width="180px">
	        							</p>
	        							<h1 class="text-white"><?php echo $site_name; ?></h1>
	        							<p>
	        								<a href="<?php echo $site_url; ?>/login" class="btn btn-primary"><i aria-hidden="true" class="fa fa-sign-in-alt"></i> MASUK</a>
	        								<a href="<?php echo $site_url; ?>/registrasi" class="btn btn-primary"><i aria-hidden="true" class="fa fa-user-plus"></i> DAFTAR</a>
	        							</p>
	        							<i aria-hidden="true" class="fa fa-check-circle"></i> Developed by TEAM IT UBPR 2022
	        						</div>
	        					</div>
	        					<div class="col-lg-6">
	        						<img style="border-radius: 30px;" src="<?php echo $site_url; ?>/content/logo/bprbekasi.jpg" class="img-fluid">
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="shape1"><img src="mod/assets-index/images/shape1.png" alt="shape"></div>
	        	<div class="shape2 rotateme"><img src="mod/assets-index/images/shape2.svg" alt="shape"></div>
	        	<div class="shape3"><img src="mod/assets-index/images/shape3.svg" alt="shape"></div>
	        	<div class="shape4"><img src="mod/assets-index/images/shape4.svg" alt="shape"></div>
	        	<div class="shape5"><img src="mod/assets-index/images/shape5.png" alt="shape"></div>
	        	<div class="shape6 rotateme"><img src="mod/assets-index/images/shape4.svg" alt="shape"></div>
	        	<div class="shape7"><img src="mod/assets-index/images/shape4.svg" alt="shape"></div>
	        	<div class="shape8 rotateme"><img src="mod/assets-index/images/shape2.svg" alt="shape"></div>
	        </div>

	        <!--PANEL-->
	        <section class="boxes-area" id="panel">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2><i aria-hidden="true" class="fa fa-star"></i> <?php echo $site_name; ?></h2>
	        			<div class="bar"></div>
	        			<p>
	        				Seluruh Karyawan Harus Mematuhi dan menjalankan aturan yang berlaku
	        			</p>
	        			<br/>
	        			<p>
	        				Kini absen jadi lebih mudah dengan ABSEN ONLINE UBPR 2022
	        			</p>
	        		</div>
	        		<!--<div class="row">
	        			<div class="boxes-slides">
	        				<div class="col-lg-12 col-md-12">
	        					<div class="single-box bg-005CAA">
	        						<div class="icon">
	        							<i data-feather="airplay"></i>
	        						</div>
	        						<h3>Absen lebih aman tanpa fingerprint</h3>
	        						<p>Aplikasi absensi mobile Android yang berbasis GPS dan disertai fitur selfie Talenta memberikan akses pemantauan keterlambatan, jam istirahat dan ketidakhadiran selama penerapan jam kerja parsial. Tinggalkan mesin fingerprint dan beralih ke sistem absensi yang aman dan lebih cepat.</p>
	        					</div>
	        				</div>

	        				<div class="col-lg-12 col-md-12">
	        					<div class="single-box bg-005CAA">
	        						<div class="icon">
	        							<i data-feather="zap"></i>
	        						</div>
	        						<h3>Kelola shift kerja saat new normal</h3>
	        						<p>Proses panjang dan manual tidak lagi diperlukan dengan manajemen shift karyawan yang langsung dari Talenta. Pengelolaan jam kerja lebih cepat dan praktis selama new normal bahkan untuk perusahaan multi-cabang. Manajemen jadwal kerja dan sistem otomatis akan merekan setiap kehadiran atau ketidakhadiran karyawan.</p>
	        					</div>
	        				</div>

	        				<div class="col-lg-12 col-md-12">
	        					<div class="single-box bg-005CAA">
	        						<div class="icon">
	        							<i data-feather="check"></i>
	        						</div>
	        						<h3>Berbasis cloud dan multi platform</h3>
	        						<p>Anda tidak membutuhkan investasi server fisik karena aplikasi ini menggunakan teknologi yang multi platform. Memudahkan akses sistem dari berbagai macam jenis perangkat. Dengan penggunaan cloud server memudahkan Anda mendapat informasi dan data kehadiran realtime yang dapat di akses setiap saat.</p>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>-->

	        <!--APLIKASI-->
	       <!-- <section class="services-area-two bg-f5f5f5" id="aplikasi">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2><i class="fab fa-android" style="color:#a4c639"></i>Demo Aplikasi Absensi</h2>
	        			<div class="bar"></div>
	        			<p>Selain menyediakan platform berbasis web, Anda dapat mengakses sistem melalui aplikasi mobile dan tablet.</p>
	        			<a href="<?php echo $site_url; ?>" class="btn btn-primary"><i aria-hidden="true" class="fa fa-download" style="color:#a4c639"></i> Download</a>
	        		</div>
	        	</div>
	        </section>-->

	        <!--FITUR-->
	        <!--<section class="services-area ptb-50 bg-f5f5f5" id="fitur">
	        	<div class="container">
	        		<div class="row h-100 justify-content-center align-items-center">
	        			<div class="col-lg-6 col-md-12 services-content">
	        				<div class="section-title">
	        					<h2><i aria-hidden="true" class="fa fa-star"></i> Fitur Unggulan</h2>
	        					<div class="bar"></div>
	        					<p>Kami selalu meningkatkan kualitas sistem dan memberikan fitur terbaik yang bisa dengan mudah Anda gunakan.</p>
	        				</div>

	        				<div class="row">
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="check"></i> Berbasis Android & Web
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="chevrons-up"></i> Tanpa Fingerprint
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="plus"></i> Atur Jadwal Kerja & Shift
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="thumbs-up"></i> Kelola Jenis Pengguna 
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="corner-right-up"></i> Fleksibel Dashboard
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="grid"></i> Absen Foto Selfie & GPS
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="zap"></i> Cepat & Mudah Digunakan
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="trending-up"></i> Rekap Laporan Excel & Pdf
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        			<div class="col-lg-6 col-md-12">
	        				<br/><img style="border-radius: 30px;" src="<?php echo $site_url; ?>/content/logo/bpr123.png" class="img-fluid" title="Fitur <?php echo $site_name; ?>" alt="Fitur <?php echo $site_name; ?>">
	        			</div>
	        		</div>
	        	</div>
	        </section>-->

	        <!--DISKRIPSI-->
	        <section class="ready-to-talk">
	        	<div class="container">
	        		<img src="<?php echo $site_url; ?>/content/<?php echo $site_logo; ?>" title="Website <?php echo $site_name; ?>" alt="Website <?php echo $site_name; ?>">
	        		<h3><?php echo $site_name; ?></h3>
	        	</div>
	        </section>

	        <!--FOOTER-->
	        <footer class="footer-area" id="kontak">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-4 col-md-12">
	        				<!--<div class="single-footer-widget pl-5">
	        					<h3>Tentang Kami</h3>
	        					<?php echo $site_description; ?><br/><br/>
	        					<ul class="list">
	        						<li><a href="<?php echo $site_url; ?>/login" title="Member Area <?php echo $site_name; ?>" alt="Member Area <?php echo $site_name; ?>">Masuk</a></li>
	        						<li><a href="<?php echo $site_url; ?>/registrasi" title="Daftar <?php echo $site_name; ?>" alt="Daftar <?php echo $site_name; ?>">Daftar</a></li>
	        					</ul>
	        				</div>
	        			</div>
	        			

			<!--Scroll Indicator Load-->
			<div class='progress-container'>
				<div class='progress-bar' id='progressbar'/>
			</div>
			<script type='text/javascript'>
				//<![CDATA[
				window.addEventListener("scroll", myFunction);
				function myFunction() {
					var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
					var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
					var scrolled = (winScroll / height) * 100;
					document.getElementById("progressbar").style.width = scrolled + "%";
				}
				//]]>
			</script>

	        <!--javascript-->
	        <script src="mod/assets-index/js/jquery.min.js"></script>
	        <script src="mod/assets-index/js/jquery.meanmenu.min.js"></script>
	        <script src="mod/assets-index/js/jquery.magnific-popup.min.js"></script>
	        <script src="mod/assets-index/js/jquery.appear.js"></script>
	        <script src="mod/assets-index/js/odometer.min.js"></script>
	        <script src="mod/assets-index/js/slick.js"></script>
	        <script src="mod/assets-index/js/owl.carousel.min.js"></script>
	        <script src="mod/assets-index/js/feather.min.js"></script>
	        <script src="mod/assets-index/js/main.js"></script>

	    </body>

	</html>

<?php } ?>