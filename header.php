<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>
	<header>
		<div class="backgroundTransparencia">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="index.php">Tinder Tips</a>
			    </div>
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="index.html">Home</a></li>
			      <li><a href="#">Dicas</a></li>
			      <li><a href="#">Contato</a></li>
			    </ul>
			  </div>
			</nav>
			<div class="centralizar">
				<h1>ASK. COPY. BE DEDS.</h1>
				<p>As melhores dicas de superação de quem ficava um ano pra conseguir três matches e hoje consegue mais do que isso por dia.</p>
			</div>
			<div class="centralizarBotoes">
				<a href="#" id="left">Swipe Left</a>
				<a href="#" id="right">Swipe Right</a>
			</div>
		</div>
	</header>