<?php
/*
Template Name: Services
*/
get_header(); ?>

<main class="page-services">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <section class="top-hero" style="background-image:url(<?php the_field('hero');?>)">
    <div class="header-content">
      <h1><?php the_field('header_title');?></h1>
      <?php the_field('header_content');?>
    </div>
  </section>
  <section class="section-links">
    <div class="container">
      <div class="column">
        <h3>Tax &amp; Accounting <i class="triangle"></i></h3>
        <?php the_field('ta_blurb');?>
        <a class="button" href="#tax">View More</a>
      </div>
      <div class="column">
        <h3>Business Improvement <i class="triangle"></i></h3>
        <?php the_field('bi_blurb');?>
        <a class="button" href="#business">View More</a>
      </div>
      <div class="column">
        <h3>Specialist Advisory <i class="triangle"></i></h3>
        <?php the_field('sa_blurb');?>
        <a class="button" href="#advisory">View More</a>
      </div>
      <div class="clear"></div>
    </div>
  </section>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</main>

<?php get_footer();
