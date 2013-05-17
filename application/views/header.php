<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Mavi Tours - Transporte Empresiarial y Turistico</title>
<link rel="icon" type="<?php echo base_url(); ?>public/image/x-icon" href="favicon.ico">
<meta itemprop="image" content="favicon.png">


<!-- Mobile Specific
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/responsive.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/fonts.css" />

<!-- Java Script
================================================== -->
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-ui-1.8.24.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/camera.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/selectnav.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyDevuRrWBoMzE8XQMKFmteg4lIau0n-b9s"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.googlemaps.1.01.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/theme.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/timer.js"></script>

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<?php 
	$theclass = (strstr($_SERVER['PHP_SELF'], 'index.php')) ? 'home' : 'blog' ;
?>

</head>

<body class="<?php echo $theclass; ?>">

<?php  
	if (strstr($_SERVER['PHP_SELF'], 'index.php')) {
?>
<div id="slider-wrap">
	<div class="camera_wrap" id="camera-wrap">
		<div data-src="<?php echo base_url(); ?>public/images/uploads/1280x800/1.jpg">
		
			<div class="camera_caption moveFromBottom camera_text_center">
				<div class="caption_slider h2">
					Turismo Receptivo y Turismo Nacional
				</div>
			</div>
			
		</div>
		<div data-src="<?php echo base_url(); ?>public/images/uploads/1280x800/2.jpg">
        
        	<div class="camera_caption moveFromLeft camera_text_center">
				<div class="caption_slider h2">
					Traslados al Aeropuerto
				</div>
			</div>
        
        </div>
		<div data-src="<?php echo base_url(); ?>public/images/uploads/1280x800/3.jpg">
        	
            <div class="camera_caption fadeIn camera_text_center">
				<div class="caption_slider h2">
					City Tours
				</div>
			</div>
        
        </div>
		<div data-src="<?php echo base_url(); ?>public/images/uploads/1280x800/4.jpg">
        	
            <div class="camera_caption fadeIn camera_text_center">
				<div class="caption_slider h2">
					Visitas Guiadas
				</div>
			</div>
        
        </div>        
		<div data-src="<?php echo base_url(); ?>public/images/uploads/1280x800/5.jpg">
        	
            <div class="camera_caption fadeIn camera_text_center">
				<div class="caption_slider h2">
					Excursiones
				</div>
			</div>
        
        </div> 
		<div data-src="<?php echo base_url(); ?>public/images/uploads/1280x800/6.jpg">
        	
            <div class="camera_caption fadeIn camera_text_center">
				<div class="caption_slider h2">
					Viajes de Promoción
				</div>
			</div>
        
        </div> 
		<div data-src="<?php echo base_url(); ?>public/images/uploads/1280x800/7.jpg">
        	
            <div class="camera_caption fadeIn camera_text_center">
				<div class="caption_slider h2">
					Traslado Particulares
				</div>
			</div>
        
        </div> 
		<div data-src="<?php echo base_url(); ?>public/images/uploads/1280x800/8.jpg">
        	
            <div class="camera_caption fadeIn camera_text_center">
				<div class="caption_slider h2">
					Transporte de Personal
				</div>
			</div>
        
        </div>                                 
		
		
	</div><!--camera-wrap -->
</div>	
	<?php
	} else {
	?>
<div id="slider-wrap">
	<div class="camera_overlayer"></div>
</div>
	<?php
	}
?>

<div id="wrapper">
	<div id="container">
	
		<!--start header -->
		<header id="header">
			<div id="logo">
				<a href="<?php echo base_url(); ?>index.php" class="txtlogo"></a>
			</div>	
			<div id="searchbox">
				<div class="sup">
					<div class="container">
						<div class="clock">
							<div id="Date"></div>
							<ul id="ultime">
								<li id="hours" class="timetext"> </li>
							    <li id="point" class="timetext">:</li>
							    <li id="min" class="timetext"> </li>
							    <li id="point" class="timetext">:</li>
							    <li id="sec" class="timetext"> </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="inf">
					<a href="" title=""><img src="<?php echo base_url(); ?>public/images/facebook.png" alt="Facebook" style=" height: 26px; width: 26px; "/></a>
					<a href="" title=""><img src="<?php echo base_url(); ?>public/images/twitter.png" alt="Twitter" style=" height: 26px; width: 26px; "/></a>
					<a href="" title=""><img src="<?php echo base_url(); ?>public/images/youtube.png" alt="Youtube" style=" height: 26px; width: 26px; "/></a>
					<a href="" title=""><img src="<?php echo base_url(); ?>public/images/vimeo.png" alt="Vimeo" style=" height: 26px; width: 26px; "/></a>
				</div>
				<!--<form action="#">
					<input type="text" id="search" placeholder="Buscar" />
					<button type="submit"></button>
				</form>-->

			</div>
			<div id="navigation">
				<ul id="nav">
					<!--<li class="selected"><a href="index.html">Inicio</a></li>-->
					<li><a href="/nosotros/historia">Historia</a></li>
					<li><a href="/nosotros">¿Quiénes somos?</a>
						<ul>
							<li><a href="/nosotros/mision">Misión</a></li>
							<li><a href="/nosotros/vision">Visión</a></li>
							<li><a href="/nosotros/valores">Valores</a></li>
						</ul>
					</li>
					
					<li><a href="/nosotros/flota">Flota</a>
						<ul>
							<li><a href="/nosotros/servicios">Servicios</a></li>
							<li><a href="/nosotros/seguridad">Seguridad</a></li>
						</ul>
					</li>
					
					<li><a href="/noticias">Noticias</a></li>
					<li><a href="/contacto">Contacto</a></li>
					<!--<li><a href="element.html">Element</a></li>-->
				</ul>
			</div>
		</header>
		<!--end header -->
		