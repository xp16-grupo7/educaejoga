<!DOCTYPE html>
<!--[if IE]><html lang="pt-br" class="lt-ie9 lt-ie8"><![endif]-->
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<!-- 	<title><?php wp_title(); ?></title> -->
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>	
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="language" content="pt-br" />
	<meta name="author" content="" />
	<meta name="language" content="pt-br" />
    <link rel="canonical" href="https://<?= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] ?>" />
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/src/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/dist/main.css" type="text/css" />
	<meta name="theme-color" content="#ffffff" />
</head>
<body>
	<header id="header">
		<div class="nav-container">
			<nav class="navbar navbar-expand-lg mx-auto">				
				<a class="navbar-brand" href="<?= site_url('/'); ?>">					
					<img src="<?php bloginfo("template_url"); ?>/img/logo-educa-joga.png" title="Logo Educa e Joga" alt="Educa e Joga" />
				</a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-site" aria-expanded="false" aria-label="Toggle navigation">
					<span class="menu-icon"></span>
					<span class="menu-icon"></span>
					<span class="menu-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse justify-content-end" id="navbar-site">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#call" title="Compra de ingressos">Compra de ingressos</a>
						</li> 					
						<li class="nav-item">
							<a class="nav-link" href="#about" title="Sobre o evento">Sobre o evento</a>
						</li> 				
						<?php /*<li class="nav-item">
							<a class="nav-link" href="#palestrans" title="Palestrantes">Palestrantes</a>
						</li> */ ?> 				
						<li class="nav-item">
							<a class="nav-link" href="#location" title="Datas e Horários">Datas e Horários</a>
						</li> 				
					</ul>
				</div> 
			</nav>
		</div>
	</header>