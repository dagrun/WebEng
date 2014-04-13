<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css">
		<script  type="text/javascript" src="JS/jquery-2.1.0.js"></script>
		<script  src="JS/script.js" type="text/javascript"></script>
		
		<?php wp_head(); ?>
	</head>
	<body>
		<div>
			<header>
                <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<ul>
					<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</header>
