<!DOCTYPE HTML>
<html>

<head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url'); ?>" media="all">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
</head>

<body>
  <div id="wrapper">

  	<header>
	  	<div id="header_bar"></div>

	  	<div id="header">
	  		<div id="site_logo">
	  			<a href="<?php get_site_url() ?>"><img src="<?php bloginfo('stylesheet_directory')?>/images/site_logo.gif"></a>
	  		</div>
	  		<div id="navigation">
	  			<ul>
	  				<li>Home</li>
	  				<li>What We Do</li>
	  				<li>Past Events</li>
	  				<li>What's Next</li>
	  				<li>Who We Are</li>
	  		</div>
	  	</div>
	  </header>