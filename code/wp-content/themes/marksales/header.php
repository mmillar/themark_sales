<!DOCTYPE HTML>
<html>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="icon" type="image/jpg" href="<?php bloginfo('template_url') ?>/images/favicon.jpg">
	<link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url') ?>" media="all">
	<link rel="stylesheet" type="text/css"  href="./style.css" media="all">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/style.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:700,300,900' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>
  <div id="wrapper">

  	<header>
	  	<div id="header">
	  		<div id="site_logo">
	  			<a href="<?php bloginfo('siteurl') ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/images/site_logo.png"></a>
	  		</div>
	  		<div id="navigation" class="inactive">
	  			<?php if($post->ID == 1) { ?><a class="active" id="header-current-page" href="<?php bloginfo('siteurl') ?>">WHAT WE DO</a><?php } ?>
	  			<?php if($post->ID == 7) { ?><a class="active" id="header-current-page" href="?page_id=7">PAST EVENTS</a><?php } ?>
	  			<?php if($post->ID == 9) { ?><a class="active" id="header-current-page" href="?page_id=9">UPCOMING EVENTS</a><?php } ?>
	  			<?php if($post->ID == 11) { ?><a class="active" id="header-current-page" href="?page_id=11">WHO WE ARE</a><?php } ?>
	  			<?php if($post->ID == 5) { ?><a class="active" id="header-current-page" href="?page_id=5">CONTACT</a><?php } ?>
	  			<ul>
	  				<li><a <?php if($post->ID == 1) echo 'class="active"' ?> href="<?php bloginfo('siteurl') ?>">WHAT WE DO</a></li>
	  				<li><a <?php if($post->ID == 7) echo 'class="active"' ?> href="?page_id=7">PAST EVENTS</a></li>
	  				<li><a <?php if($post->ID == 9) echo 'class="active"' ?> href="?page_id=9">UPCOMING EVENTS</a></li>
	  				<li><a <?php if($post->ID == 11) echo 'class="active"' ?> href="?page_id=11">WHO WE ARE</a></li>
	  				<li><a <?php if($post->ID == 5) echo 'class="active"' ?> href="?page_id=5">CONTACT</a></li>
	  			</ul>
	  		</div>
	  	</div>
	  </header>