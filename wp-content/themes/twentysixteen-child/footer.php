<?php
/**
 * The twentysixteen child theme template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
                <div class="footer-info">
                    <div class="physio-text">
                        <a href="http://www.csp.org.uk/" target="_blank">
                        <h2>Chartered Society of Physiotherapists</h2>
                        </a>
                    </div>
                    <div class="physio-image">    
                        <a href="http://www.csp.org.uk/" target="_blank"><img src="http://localhost/back_pain_clinic/wp-content/themes/twentysixteen-child/img/chartered_logo_no-background.png" alt="Chartered Society of Physios logo" width="100" height="auto"></a>
                    </div>  
                    <div class="health-text">
                        <a href="http://www.hcpc-uk.co.uk/" target="_blank">
                        <h2>Health and Care Professions Council</h2>
                        </a>
                    </div>
                    <div class="health-image">
                        <a href="http://www.hcpc-uk.co.uk/" target="_blank"><img src="http://localhost/back_pain_clinic/wp-content/themes/twentysixteen-child/img/hcpc_logo_1.jpg" alt="Chartered Society of Physios logo" width="150" height="auto"></a> 
                    </div>            
                    <div class="contact-footer">
                        <h1>The Back Pain Clinic</h1>
                        <p>36 Hawkin Street</p>
                        <p>Derry</p>
                        <p>BT48 6RE</p>
                        <p>Tel: 028 71 280 380</p>
                        <p>Mob: 07920 842249</p>
                    </div>
                </div>            
                    
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>