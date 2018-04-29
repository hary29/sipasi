<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
		<!--<![endif]-->
		<head>
				<!-- Title -->
				<title>Sistem Pakar</title>
				<!-- Meta -->
				<meta http-equiv="content-type" content="text/html; charset=utf-8" />
				<meta name="description" content="">
				<meta name="author" content="">
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
				<!-- Favicon -->
			<!-- 	<link href="favicon.ico" rel="shortcut icon"> -->
				<!-- Bootstrap Core CSS -->
				<link rel="stylesheet" href="<?php echo base_url() ?>asset/front/css/bootstrap.css" rel="stylesheet">
				<!-- Template CSS -->
				<link rel="stylesheet" href="<?php echo base_url() ?>asset/front/css/animate.css" rel="stylesheet">
				<link rel="stylesheet" href="<?php echo base_url() ?>asset/front/css/font-awesome.css" rel="stylesheet">
				<link rel="stylesheet" href="<?php echo base_url() ?>asset/front/css/nexus.css" rel="stylesheet">
				<link rel="stylesheet" href="<?php echo base_url() ?>asset/front/css/responsive.css" rel="stylesheet">
				<link rel="stylesheet" href="<?php echo base_url() ?>asset/front/css/custom.css" rel="stylesheet">
				<!-- Google Fonts-->
				<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
		</head>
		<body>
				<div id="body-bg">
						<!-- Phone/Email -->
						<div id="pre-header" class="background-gray-lighter">
								<div class="container no-padding">
										<div class="row hidden-xs">
												<div class="col-sm-6 padding-vert-5">
														<strong>Phone:</strong>&nbsp;1-800-123-4567
												</div>
												<div class="col-sm-6 text-right padding-vert-5">
														<strong>Email:</strong>&nbsp;info@joomla51.com
												</div>
										</div>
								</div>
						</div>
						<!-- End Phone/Email -->
						<!-- Header -->
						<div id="header">
								<div class="container">
										<!-- <div class="row">
											<?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
												Logo -->
												<div class="logo">
														<a href="index.html" title="">
																<h2><b> SISTEM PAKAR PENYAKIT ZOONOSIS </b></h2>
														</a>
												</div>
												<!-- End Logo
																						</div> -->
								</div>
						</div>
						<!-- End Header -->
						<!-- Top Menu -->
						<div id="hornav" class="bottom-border-shadow">
								<div class="container no-padding border-bottom">
										<div class="row">
												<div class="col-md-8 no-padding">
														<div class="visible-lg">
																<ul id="hornavmenu" class="nav navbar-nav">
																		<li>
																				<a href="<?php echo base_url() ?>welcome" class="fa-home">Home</a>
																		</li>
																		<!-- <li>
																				<span class="fa-gears ">Features</span>
																				<ul>
																						<li class="parent">
																								<span>Typography</span>
																								<ul>
																										<li>
																												<a href="features-typo-basic.html">Basic Typography</a>
																										</li>
																										<li>
																												<a href="features-typo-blockquotes.html">Blockquotes</a>
																										</li>
																								</ul>
																						</li>
																						<li class="parent">
																								<span>Components</span>
																								<ul>
																										<li>
																												<a href="features-labels.html">Labels</a>
																										</li>
																										<li>
																												<a href="features-progress-bars.html">Progress Bars</a>
																										</li>
																										<li>
																												<a href="features-panels.html">Panels</a>
																										</li>
																										<li>
																												<a href="features-pagination.html">Pagination</a>
																										</li>
																								</ul>
																						</li>
																						<li class="parent">
																								<span>Icons</span>
																								<ul>
																										<li>
																												<a href="features-icons.html">Icons General</a>
																										</li>
																										<li>
																												<a href="features-icons-social.html">Social Icons</a>
																										</li>
																										<li>
																												<a href="features-icons-font-awesome.html">Font Awesome</a>
																										</li>
																										<li>
																												<a href="features-icons-glyphicons.html">Glyphicons</a>
																										</li>
																								</ul>
																						</li>
																						<li>
																								<a href="features-testimonials.html">Testimonials</a>
																						</li>
																						<li>
																								<a href="features-accordions-tabs.html">Accordions & Tabs</a>
																						</li>
																						<li>
																								<a href="features-buttons.html">Buttons</a>
																						</li>
																						<li>
																								<a href="features-carousels.html">Carousels</a>
																						</li>
																						<li>
																								<a href="features-grid.html">Grid System</a>
																						</li>
																						<li>
																								<a href="features-animate-on-scroll.html">Animate On Scroll</a>
																						</li>
																				</ul>
																		</li> -->
																		<li>
																				<a href="<?php echo base_url() ?>front/about"  class="fa-th">Penyakit</a>
																		</li>
																		<!-- <li>
																				<a href="<?php echo base_url() ?>front/contact" class="fa-comment ">Contact</a>
																		</li> -->
																		<li>
																				<span class="fa-user ">User</span>
																				<ul>
																						<li>
																								<a href="<?php echo base_url() ?>front/Log">Login</a>
																						</li>
																						<li>
																								<a href="<?php echo base_url() ?>front/register">Sign-Up</a>
																				</ul>
																		</li>
																</ul>
														</div>
												</div>
												<div class="col-md-4 no-padding">
														<ul class="social-icons pull-right">
																<li class="social-rss">
																		<a href="#" target="_blank" title="RSS"></a>
																</li>
																<li class="social-twitter">
																		<a href="#" target="_blank" title="Twitter"></a>
																</li>
																<li class="social-facebook">
																		<a href="#" target="_blank" title="Facebook"></a>
																</li>
																<li class="social-googleplus">
																		<a href="#" target="_blank" title="Google+"></a>
																</li>
														</ul>
												</div>
										</div>
								</div>
						</div>
						<!-- End Top Menu -->
						<!-- === END HEADER === -->