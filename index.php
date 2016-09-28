<!DOCTYPE HTML>
<html>
	<head>
		<title>Webjef</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
		
		<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
		
		
		
		
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header class="logoi">
				<div class="divlogo">
					<img src="images/logowj.png" alt="Logo Webjef" title="Logo Webjef" style="">
				</div>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">Iniciar</a>
				</footer>
				
	<!--Thumbnail Navigation-->
	<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
	
	<!--Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
	
	<!--Control Bar-->
	<div id="controls-wrapper" class="load-item">
		<div id="controls">
			
			<a id="play-button"><img id="pauseplay" src="img/pause.png"/></a>
		
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
			<!--Thumb Tray button-->
			<a id="tray-button"><img id="tray-arrow" src="img/button-tray-up.png"/></a>
			
			<!--Navigation-->
			<ul id="slide-list"></ul>
			
		</div>
	</div>
				
				
				
				
				
			</section>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Nosotros</h2>
				</header>
				<p>Somos un conjunto de ingenieros y diseñadores enfocados en brindar el mejor servicio a nuestros clientes.<br />
				Es de vital importancia para nosotros materializar sus proyectos,<br />
				asesoraremos y brindaremos las herrramientas necesarias para lograr los objetivos propuestos.</p>
				<footer>
					<a href="#first" class="button style2 scrolly">Conociendonos</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image fit"><img src="images/slider1.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Diseño gráfico</h2>
					</header>
					<p>Daremos vida a sus ideas, con estilo y creatividad encontraremos la manera en la que sus visitantes se conviertan en clientes.</p>
				</div>
			</article>

		<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="images/slider2.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Desarrollo de software y web</h2>
					</header>
					<p>En nuestra parte tecnológica, codificaremos de la mejor manera para tener un desarrollo destacable en las paginas web, en el software y aplicaciones.</p>
				</div>
			</article>

		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>Portafolio</h2>
					<p>Pronto encontraras los proyectos realizados en esta sección.</p>
				</header>
				<div class="inner gallery">
					<div class="row 0%">
						<div class="3u 12u(mobile)"><a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
					</div>
					<div class="row 0%">
						<div class="3u 12u(mobile)"><a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" alt="" title="Different." /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/07.jpg" class="image fit"><img src="images/thumbs/07.jpg" alt="" title="History was made here" /></a></div>
						<div class="3u 12u(mobile)"><a href="images/fulls/08.jpg" class="image fit"><img src="images/thumbs/08.jpg" alt="" title="People come and go and walk away" /></a></div>
					</div>
				</div>
			</article>

		<!-- Contact -->
			<article class="container box style3">
				<header>
					<h2>Contacto</h2>
					<p>Escribanos y nos pondremos en contacto lo más pronto posible.</p>
				</header>
				<?php include 'contactoform.php';?>
				
			</article>

		<section id="footer">
			<ul class="icons">
				<li><a class="icon fa-envelope-o"><span class="label"></span></a></li>contacto@webjef.com<br />
				<li><a class="icon fa-envelope-o"><span class="label"></span></a></li>jeffersteven@hotmail.com<br />
				<li><a class="icon fa-phone-square"><span class="label"></span></a></li>+57 305 737 4440<br />
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Copyright. Todos los derechos reservados.</li><li>Diseño: <a href="http://webjef.com">Webjef</a></li>
				</ul>
			</div>
		</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		
		<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
		
		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slideshow               :   1,			// Slideshow on/off
					autoplay				:	1,			// Slideshow starts playing automatically
					start_slide             :   1,			// Start slide (0 is random)
					stop_loop				:	0,			// Pauses slideshow on last slide
					random					: 	0,			// Randomize slide order (Ignores start slide)
					slide_interval          :   10000,		// Length between transitions
					transition              :   6, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	4000,		// Speed of transition
					new_window				:	1,			// Image links open in new window/tab
					pause_hover             :   0,			// Pause slideshow on hover
					keyboard_nav            :   1,			// Keyboard navigation on/off
					performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,			// Disables image dragging and right click with Javascript
															   
					// Size & Position						   
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   1,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   1,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
					// Components							
					slide_links				:	false,	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					thumb_links				:	1,			// Individual thumb links for each slide
					thumbnail_navigation    :   0,			// Thumbnail navigation
					slides 					:  	[			// Slideshow Images
														{image : '/images/slides/slide1.jpg', title : 'Webjef', thumb : '/images/slides/slide1.jpg', url : '#'},
														{image : '/images/slides/slide2.jpg', title : 'Webjef', thumb : '/images/slides/slide2.jpg', url : '#'},  
														{image : '/images/slides/slide3.jpg', title : 'Webjef', thumb : '/images/slides/slide3.jpg', url : '#'},
														{image : '/images/slides/slide4.jpg', title : 'Webjef', thumb : '/images/slides/slide4.jpg', url : '#'},
														{image : '/images/slides/slide5.jpg', title : 'Webjef', thumb : '/images/slides/slide5.jpg', url : '#'},
														{image : '/images/slides/slide6.jpg', title : 'Webjef', thumb : '/images/slides/slide6.jpg', url : '#'}
												],
												
					// Theme Options			   
					progress_bar			:	5,			// Timer for each slide							
					mouse_scrub				:	0
					
				});
		    });
		    
		</script>

	</body>
</html>