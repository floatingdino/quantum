<?php
/*
Template Name: Team
*/
get_header(); ?>

<main class="page-team">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <section class="top-hero" style="background-image:url(<?php the_field('hero');?>)">
    <div class="header-content">
      <h1><?php the_field('header_title');?></h1>
      <?php the_field('header_content');?>
    </div>
  </section>
  <section class="content">
    <?php the_content();?>
  </section>
  <?php if(have_rows('testimony')): ?>
  <section class="testimonies">
    <div class="quotes"></div>
    <div class="slider">
      <ul>
        <?php while(have_rows('testimony')):the_row(); ?>
        <li>
          <div class="slider-content">
            <?php the_sub_field('quote');?>
            <h3><?php the_sub_field('person')?></h3>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </section>
  <?php endif; ?>
  <section class="team" id="team">
    <div class="section-intro">
      <h2>Meet the Team</h2>
      <p>Your relationship with us is what really matters at Quantum. Our team is an extension of your team and your business is our business. With great communication and help when you need it, the people at Quantum just make your life easier.</p>
    </div>
    <?php
    $args = array('post_type'=>'people','posts_per_page'=>-1);
    $loop = new WP_Query($args);
    while($loop->have_posts()) : $loop->the_post();?>
      <article class="team-person">
        <div class="team-container">
          <?php the_post_thumbnail();?>
          <div class="overlay">
            <a class="whole-article" href="<?php the_permalink();?>"></a>
            <?php
            if(get_field('email') || get_field('linkedin')){
              ?>
              <ul>
                <?php if(get_field('linkedin'))
                  echo '<a href="' . get_field('linkedin') . '"><li class="linkedin"></li></a>';?>
                <?php if(get_field('email'))
                  echo '<a href="mailto:' . get_field('email') . '"><li class="email"></li></a>';?>
              </ul>
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('position');?></p>
              <a class="button" href="<?php the_permalink();?>">View Profile</a>
            <?php } ?>
          </div>
        </div>
      </article>
    <?php endwhile;
    wp_reset_postdata();?>
    <div class="clear"></div>
  </section>
  <?php
  $args = array('post_type'=>'careers','posts_per_page'=>-1);
  $loop = new WP_Query($args);
  if($loop->have_posts()):?>
  <section class="careers">
    <div class="section-intro">
      <h2>Careers</h2>
      <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. </p>
    </div>
    <?php while($loop->have_posts()) : $loop->the_post();?>
    <article class="team-person">
      <div class="team-container">
        <h3><?php the_title();?></h3>
        <p>Role Available</p>
        <a class="button" href="<?php the_permalink();?>">View More</a>
      </div>
    </article>
    <?php endwhile;
    wp_reset_postdata(); ?>
    <div class="clear"></div>
  </section>
  <?php endif; ?>
  <section class="partners">
    <div class="container">
      <div class="section-intro">
        <h2>Partnered for Success</h2>
        <p>We’re proud to partner with the best in the industry to provide the expertise your business needs. Our depth of experience in business software systems means that we can work with you to streamline your operations.  </p>
      </div>
      <?php
      if(have_rows('partner')):?>
      <div class="partner-logos">
        <?php while(have_rows('partner')):the_row();?>
          <div class="partner" style="background-image:url(<?php the_sub_field('image');?>)"></div>
        <?php endwhile;?>
      </div>
      <div class="clear"></div>
      <?php endif;?>
    </div>
  </section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>
<script>
jQuery(document).ready(function($){
  $('.slider').unslider({
    autoplay:true,
    speed:500,
    delay:5000,
    arrows:false,
    animateHeight:true
  });
});
</script>
</main>

<?php get_footer();
