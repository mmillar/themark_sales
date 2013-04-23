<!DOCTYPE HTML>
<html>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url') ?>" media="all">
	<link rel="stylesheet" type="text/css"  href="./style.css" media="all">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/style.js"></script>
</head>

<body>
  <div id="wrapper">

  	<header>
	  	<div id="header_bar"></div>

	  	<div id="header">
	  		<div id="site_logo">
	  			<a href="<?php bloginfo('siteurl') ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/images/site_logo.gif"></a>
	  		</div>
	  		<div id="navigation">
	  			<ul>
	  				<li><a <?php if($post->ID == 1) echo 'style="color:#F59925"' ?> href="<?php bloginfo('siteurl') ?>">Home</a></li>
	  				<li><a <?php if($post->ID == 5) echo 'style="color:#F59925"' ?> href="?page_id=5">What We Do</a></li>
	  				<li><a <?php if($post->ID == 7) echo 'style="color:#F59925"' ?> href="?page_id=7">Past Events</a></li>
	  				<li><a <?php if($post->ID == 9) echo 'style="color:#F59925"' ?> href="?page_id=9">What's Next</a></li>
	  				<li><a <?php if($post->ID == 11) echo 'style="color:#F59925"' ?> href="?page_id=11">Who We Are</a></li>
	  		</div>
	  	</div>
	  </header>