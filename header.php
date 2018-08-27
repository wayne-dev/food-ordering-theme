<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage FoodOrdering
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div  class="container-full">
	<div  class="header">
		<div class="top-bar">
			<div class="container-fluid">
			  <div class="row d-flex align-items-center">
				<div class="col-sm-7 d-none d-sm-block">
				  <ul class="list-inline mb-0">
					<li class="list-inline-item pr-3 mr-0">
					  <i class="fa fa-phone"></i>
					</li>
					<li class="list-inline-item px-3 border-left d-none d-lg-inline-block">Free shipping on orders over $300</li>
				  </ul>
				</div>
				<div class="col-sm-5 d-flex justify-content-end">
				  <!-- Language Dropdown-->
				  <div class="dropdown border-right px-3">
					<a id="langsDropdown" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
						English
					</a>
					<div aria-labelledby="langsDropdown" class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item text-sm">
						German
						</a>
						<a href="#" class="dropdown-item text-sm"> 
							French
						</a>
					</div>
				  </div>
				  <!-- Currency Dropdown-->
				  <div class="dropdown pl-3 ml-0"><a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle topbar-link">USD</a>
					<div aria-labelledby="currencyDropdown" class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item text-sm">EUR</a><a href="#" class="dropdown-item text-sm"> GBP</a></div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		<nav class="navbar navbar-expand-sm navbar-white bg-white stickyheader">
			<div class ='container bd-navbar '>
				<a class="navbar-brand" href="#">Expand at sm</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"   >
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarsExample03">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					  </li>
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
						<div class="dropdown-menu" aria-labelledby="dropdown03">
						  <a class="dropdown-item" href="#">Action</a>
						  <a class="dropdown-item" href="#">Another action</a>
						  <a class="dropdown-item" href="#">Something else here</a>
						</div>
					  </li>
					</ul>
					<form class="form-inline my-2 my-md-0">
					  <input class="form-control" type="text" placeholder="Search">
					</form>
				  </div>
			</div>
		</nav>
	</div>

	<?php

	?>

	<div class="container ">
		<div id="content" class="site-content">
