<?php /* Template Name: page-about.php */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); 
            $about_image = get_field('about_image');
            $size ='full';
        ?>
        
    <div class="page-header">
        <h1><?php the_title(); ?></h1>
    </div>
    
    <div class="about-main">
        
        <div class="about-content">
    
            <?php the_content(); ?>
    
        </div>
        
        <div class="about-image"> 
            <?php if($about_image) { 
                echo wp_get_attachment_image($about_image, $size);
                } ?>
        </div>
        
    </div>
        
	</main><!-- .site-main -->


</div><!-- .content-area -->



<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>