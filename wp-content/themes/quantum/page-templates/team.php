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
  <section class="testimonies">

  </section>
  <section class="team">
    <div class="section-intro">
      <h2>Meet the Team</h2>
      <p>Your relationship with us is what really matters at Quantum. Our team is an extension of your team and your business is our business. With great communication and help when you need it, the people at Quantum just make your life easier.</p>
    </div>
    <?php
    $args = array('post_type'=>'people','posts_per_page'=>-1);
    $loop = new WP_Query($args);
    while($loop->have_posts()) : $loop->the_post();?>
      <article>
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
    <?php endwhile;?>
    <div class="clear"></div>
  </section>
  <section class="careers">

  </section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

</main>

<?php get_footer();
