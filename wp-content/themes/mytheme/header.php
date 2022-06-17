<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

		<!-- custom stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- custom scripts -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	</head>

	<body>

	<!-- header section -->
	<div class="navbar navbar-fixed-top mn">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand">MyPet Care</div>
			</div>
			<ul class="navbar-nav nav menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="<?php echo get_template_directory_uri(); ?>/contact.html">Contact</a></li>
			</ul>
			<ul class="navbar-nav navbar-right cnc">
				<li class="login_button"><a href="<?php echo get_template_directory_uri(); ?>/login.html">Login</a></li>
				<li class="active signup_button">Signup, it's free!</li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- end header section -->