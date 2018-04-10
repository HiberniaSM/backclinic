<?php
/**
 * This is the twentysixteen child theme front page display
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen 
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="banner-image">
    <h2>The Back Pain Clinic</h2>
    <p class="name">John McNamee M.C.S.P</p>
    <p class="number">Call Us: 028 71280380</p>
</div>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); 
            $profile_image = get_field('profile_image');
            $services_header = get_field('services_header');
            $services_content = get_field('services_content');
            $accreditation_header = get_field('accreditation_header');
            $accreditation_content = get_field('accreditation_content');
            $size ='full';
        ?>
        
            <div class="page-header">
            
                <h1>Welcome to the Back Pain Clinic</h1>
            </div>        
        
        <article class="profile">
            <div class="profile-content">
				<div class="profile-text">
                    <?php the_content(); ?>
                </div>
                <div class="profile-image">
                    <?php if($profile_image) { 
                    echo wp_get_attachment_image($profile_image, $size);
                    } ?>
                </div>
            </div> 
        
            
                <h3 class="services-header"><?php echo $services_header; ?>
                </h3>
                <p class="services-content"><?php echo $services_content; ?>
                </p>
        
                <h3 class="header-accreditation"><?php echo $accreditation_header; ?></h3>
                <p class="main-accreditation"><?php echo $accreditation_content; ?>
                </p> 
        
        </article>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
		<?php endwhile; // end of the loop. ?>

