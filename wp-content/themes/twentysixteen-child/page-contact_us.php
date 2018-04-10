<?php /* Template Name: page-contact_us.php */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); 
        ?>
    
    <div class="page-header">

        <h1><?php the_title(); ?></h1>
    
    </div>
          
    <div class="contact-body">
        <div class="contact-content">
    
            <?php the_content(); ?>
        
        </div>
    `   <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1144.4392205124648!2d-7.3207538618711885!3d54.99276524053241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485fe19d05256b99%3A0x1c4c5efcc9f4def0!2sBack+Pain+Clinic!5e0!3m2!1sen!2suk!4v1522693592766" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>    
	
</main><!-- .site-main -->


</div><!-- .content-area -->



<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>