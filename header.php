<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Botanist
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="90">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'botanist' ); ?></a>

	<!--Page Loader-->
<div class="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!--Page Loader ends-->
<div class="parallax-content">
    <header>
    <section class="home-main" id="home">
        <h2 class="sr-only">This is home section</h2>
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed navbar-fixed-top ">
                <div class="menu-icon-position hidden-lg hidden-md hidden-sm">
                    <div class="menu-icon">
                        <span></span>
                    </div>
                </div>
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    
                    <div class="navbar-search-box-icon">
                        <a href="<?php echo get_theme_mod('booking_url')?>" class="search-icon scroll button"><?php echo get_theme_mod('booking_label')?> <i class="fa fa-angle-right white"> </i></a>
                    </div>
                    
                    <?php
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'primary',
			                'items_wrap'		=>	'<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
			                'container_class'	=>	'collapse navbar-collapse',
			                'container_id'		=>	'navbar-menu'
			            ));
			        ?>			        
                </div>

            </nav>
        <section class="homebarracuda padding">
	        <div class="container">
	            <div class="text-center feature-about-text">		            
	                <?php if( get_field('home_logo') ): ?>
		                <h5 class="above-heading-line"><img src="<?php the_field('home_logo')?>" class="logo-display img-responsive aligncenter" alt="<?php bloginfo( 'name' ); ?>">
		                </h5>
		             <?php endif;?>
	                <?php if( get_field('home_statement') ): ?>
	                	<h2 class="feature-heading top20" data-aos="fade-up"><?php the_field('home_statement')?></h2>
	                <?php endif;?>
	            </div>
	        </div>
	    </section>
		
    
        <!--Header ends-->


        <!--Full Menu-->
        <div class="full-menu">
            <div class="menu-icon active">
                <span></span>
            </div>
            <div class="open-full-menu-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 columns half text-center">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-full heading_space">
	                            <img src="<?php echo get_template_directory_uri(); ?>/images/botanist-logo-1.png" class="logo-display" alt="<?php bloginfo( 'name' ); ?>"></a>

                        </div>
                                                
                        <?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
								'container_class'	=>	'col-sm-12 columns half text-left',
				                'menu_class'		=>	'full-nav top20 heading_space'
				            ));
				        ?>
                                                
                        <div class="col-sm-12">
                            <ul class="social">
                                <?php if(get_theme_mod('url_field_fb')):?><li>
                                    <a href="<?php echo get_theme_mod('url_field_fb')?>" target="_blank" class="facebook button">
                                        <i class="fa fa-facebook" ></i>
                                    </a>
                                </li><?php endif;?>
                                <?php if(get_theme_mod('url_field_twitter')):?><li>
                                    <a href="<?php echo get_theme_mod('url_field_twitter')?>" target="_blank" class="twitter button">
                                        <i class="fa fa-twitter" ></i>
                                    </a>
                                </li><?php endif;?>
                                <?php if(get_theme_mod('url_field_pin')):?><li>
                                    <a href="<?php echo get_theme_mod('url_field_pin')?>" target="_blank" class="pinterest button">
                                        <i class="fa fa-pinterest" ></i>
                                    </a>
                                </li><?php endif;?>
                                <?php if(get_theme_mod('url_field_inst')):?><li>
                                    <a href="<?php echo get_theme_mod('url_field_inst')?>" target="_blank" class="instagram button">
                                        <i class="fa fa-instagram" ></i>
                                    </a>
                                </li><?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homebarracuda-two padding-top">
		<div class="text-center home-bottom">
            <?php if( get_field('home_process_one') ): ?>
            	<h4 class="feature-bottom-heading"><?php the_field('home_process_one')?></h4>
            <?php endif;?>
         </div>
         <div class="vertical-line"></div>
	</section>
    </header>
    <!--Full Menu-->
    <!-- Navigation End -->
	<div id="content" class="site-content">
