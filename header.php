<?php
/**
 * The header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <?php get_template_part( 'partials/head' ); ?>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8HCL7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div id="wrapper" class="wrapper">
	<header id="top-header" itemscope itemtype="http://schema.org/WPHeader">
		<div class="site-header">
			 <div class="container">
			 	  <div class="row">
			 	  	  <div class="col-xs-8 col-sm-4 col-md-3">
			 	  	    <div class="site-logo">
			 	  	  		<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Logo" class="site-logo" /></a>
			 	  	  	</div>
			 	  	  </div>
			 	  	  <div class="visible-xs visible-sm col-xs-4 col-sm-8">
                                <ul class="mobile-icons">
                                	<li><span id="burger-menu" class="menu-icon fa fa-bars"></span></li>
                                	<li><span id="mobile-search" class="fa fa-search"></span></li>
                                </ul>	
			 	  	  </div>
			 	  	  <div class="col-xs-12 col-sm-12 col-md-9">
			 	  	  		<nav class="navbar" itemscope itemtype="http://schema.org/SiteNavigationElement">

			 	  	  		    <?php
						            wp_nav_menu( array(
						                'menu'              => 'navbar',
						                'theme_location'    => 'navbar',
						                'depth'             => 2,
						                'container'         => false,
						                'container_class'   => false,
						                'menu_class'        => 'menu',
						                'menu_id'           => 'navbar'
						                )
						            );
						        ?>
			 	  	  	 	</nav>
			 	  	  	 	<div id="sb-search" class="sb-search">
			 	  	  	 		<?php echo get_search_form() ?>
							</div>
			 	  	  </div>
			 	  </div>
			 </div>
		</div>
	</header>