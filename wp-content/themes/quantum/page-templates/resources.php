<?php
/*
Template Name: Resources
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<h1></h1>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>







<?php get_footer();
