<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
					<meta charset="<?php bloginfo( 'charset' ); ?>"/>
					<title>
					<?php
					    // The title
					    wp_title( '|', true, 'right' );
					    // Add the blog name.
					    bloginfo( 'name' );
					    
					?>
					</title> 
					<link rel="profile" href="http://gmpg.org/xfn/11" /> 
					<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
					<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
					<!-- Fix for Internet Explorer prior to version 9 by Remy Sharp http://remysharp.com/2009/01/07/html5-enabling-script/ -->
					<!--[if lt IE9]>
					<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
					<![endif]-->
					<?php
					      // Always have wp_head() before closing of head
					      wp_head();
					?>
</head>

<body <?php body_class(); ?>>

      <div id="outer-wrap">
          <div id="inner-wrap">
              <header id="header-container">
                  <hgroup>
                  <?php if (is_home() || is_front_page()) { ?>
                      <h1 id="site-title">
                          <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?>
                          </a>
                      </h1>
                      <h2 id="site-description">
                          <?php bloginfo( "description" ); ?>
                      </h2>
                  <?php } else { ?>
                      <div id="site-title">
                          <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?>
                          </a>
                      </div>
                      <div id="site-description">
                          <?php bloginfo( 'description' ); ?>
                      </div> 
                  <?php } ?>
                  </hgroup>
                  <nav>
                  <?php
                      // Top navigation menu
                      wp_nav_menu( array( 'theme_location' => 'top-navigation'
                      )
                  ); ?>
                  </nav>
                  </header> <!-- #header-container ends -->
                          
                          
                        