<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Botanist
 */

?>

</div><!-- #content -->
</div><!-- end parallax content -->
<!-- footer starts -->
<div class="footer">
    <div class="container">
        <div class="footer-icon clearfix text-center top100 bottom30">
            <div class="p3">
                <footer id="colophon" class="site-footer">
					<div class="footer-tagline center-block">
						<img src="<?php echo get_theme_mod('footer_logo')?>" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive aligncenter">
					</div>
					<div class="footer-address center-block top20">
						<p><span class="footer_phone"><?php echo get_theme_mod('footer_phone')?></span> | <span class="footer_address"><?php echo get_theme_mod('footer_address')?></span></p>
					</div>
					<div class="footer-social">
						<ul class="footer-icon-list list-inline social">
							<?php if(get_theme_mod('url_field_fb')):?>
								<li><a href="<?php echo get_theme_mod('url_field_fb')?>" class="facebook button" target="_blank"><i class="fa fa-facebook"></i></a></li><?php endif;?>
							<?php if(get_theme_mod('url_field_twitter')):?>
								<li><a href="<?php echo get_theme_mod('url_field_twitter')?>" class="twitter button" target="_blank"><i class="fa fa-twitter"></i></a></li><?php endif;?>
							<?php if(get_theme_mod('url_field_pin')):?>
								<li><a href="<?php echo get_theme_mod('url_field_pin')?>" class="pinterest button" target="_blank"><i class="fa fa-pinterest"></i></a></li><?php endif;?>
							<?php if(get_theme_mod('url_field_inst')):?>
								<li><a href="<?php echo get_theme_mod('url_field_inst')?>" class="instagram button" target="_blank"><i class="fa fa-instagram"></i></a></li><?php endif;?>
						</ul>
					</div>
					<div class="site-info top60"><small>
						<?php
							$site_name = get_bloginfo( 'name' );
							$current_year = date('Y');
							$footer_copyright = get_theme_mod('footer_copyright', 'No copyright information has been saved yet.');
							printf(esc_html__( 'Copyright &copy; %s. ', 'botanist' ), $current_year);
							printf( esc_html__( '%s. ', 'botanist' ), $site_name  );
							printf( esc_html__( ' %s', 'botanist' ), $footer_copyright);
						?></small>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Advent Pro:300,400,500,600', 'Cormorant Garamond:300,400,500,600', 'Open Sans:400,600']
    }
  });
</script>
<?php wp_footer(); ?>
</body>
</html>