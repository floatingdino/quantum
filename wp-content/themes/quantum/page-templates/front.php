<?php
/*
Template Name: Front
*/
get_header(); ?>

<main class="page-front">
  <?php do_action( 'foundationpress_before_content' ); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <section class="top-hero" style="background-image:url(<?php the_field('hero');?>)">
      <div class="header-content" style="visibility:hidden;">
        <h1><?php the_field('header_title');?></h1>
        <?php the_field('header_content');?>
        <a class="button" href="/team">Find out how</a>
      </div>
      <div class="header-color"></div>
    </section>

    <section class="faux-top">
      <div class="header-content">
        <h1><?php the_field('header_title');?></h1>
        <?php the_field('header_content');?>
        <a class="button" href="/team">Find out how</a>
      </div>
    </section>

    <?php if(have_rows('blocks')):?>
      <section class="top-blocks">
        <?php while(have_rows('blocks')):the_row();?>
          <article class="block">
            <a href="<?php the_sub_field('link'); ?>">
            <div class="container" style="background-image:url(<?php the_sub_field('background_image');?>)">
              <h2><?php the_sub_field('tag');?></h2>
              <h3><?php the_sub_field('title');?> <i class="triangle"></i></h3>
              <div class="orange-overlay"></div>
            </div>
            </a>
          </article>
        <?php endwhile;?>
        <div class="clear"></div>
      </section>
    <?php endif;?>

    <section class="middle">
      <?php the_content();?>
      <div class="clear"></div>
    </section>
    <?php if(have_rows('featured_team')): ?>
    <section class="featured-team">
      <h3>Our Team</h3>
        <?php while(have_rows('featured_team')):the_row(); ?>
          <?php $post_object = get_sub_field('person');
          $post = $post_object;
          setup_postdata($post);
          ?>
          <article class="person">
            <a class="loader" data-modal="<?php the_id();?>" href="<?php echo untrailingslashit(get_permalink());?>">
            <div class="headshot" style="background-image:url(<?php the_post_thumbnail_url('medium');?>)">
              <?php //the_post_thumbnail(); ?>
            </div>
            <h4><?php the_title(); ?></h4>
            </a>
          </article>
        <?php endwhile;wp_reset_postdata();?>
        <div class="clear"></div>

        <a class="button" href="team#team">View All</a>
    </section>
    <?php endif;?>
    <section class="resources">
      <h1>Resources</h1>
      <div class="container">
      <?php $args = array('posts_per_page'=>4);
      $loop = new WP_Query($args);
      while($loop->have_posts()):$loop->the_post();  ?>
      <article class="<?php echo get_the_category()[0]->slug;?> item">
        <a href="<?php the_permalink();?>">
        <div class="article-body">
          <?php
          if(has_post_thumbnail()){
              the_post_thumbnail();
          }
          ?>
          <div class="content">
            <p class="article-details"><strong><?php echo get_the_category()[0]->name;?></strong> / <?php echo get_the_date(get_option('date_format'));?></p>
            <h3><?php the_title();?></h3>
            <p><?php the_excerpt();?></p>
          </div>
        </div>
        </a>
      </article>
    <?php endwhile; wp_reset_postdata();?>
    <div class="clear"></div>
    <a class="button" href="/resources">View More</a>
    </div>
    </section>
  <?php endwhile;?>
  <?php do_action( 'foundationpress_after_content' ); ?>
</main>

<article id="person-modal" class="reveal full" data-reveal>
  <button id="closebtn">&#215;</button>
  <span id="puthere"></span>
</article>

<script>
  modal = $('#person-modal');
  $('a.loader').click(function(){
    // modal = $('#' + $(this).attr("data-modal"));
    modal = $('#person-modal');
    modalcontainer = $('#puthere');
    $(modalcontainer).load($(this).attr("href") + " #person-content", function(){
      $(modal).fadeIn(200);
    });
    return false;
  });
  $('#closebtn').click(function(){
    $(modal).fadeOut(200);
  })
</script>

<?php get_footer();
