<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" charset="utf-8">
		<script  type="text/javascript" src="JS/jquery-2.1.0.js"></script>
		<script src="JS/script.js" type="text/javascript"></script>
		
		<?php wp_head(); ?>
	</head>
	<body>
		<div>
			<header>
				<h1><a href="#">Evaluate Thy Hotel</a></h1>
				<ul>
					<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</header>