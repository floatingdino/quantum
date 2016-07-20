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
  <section id="tax">
    <div class="section-header" style="background-image:url(<?php the_field('ta_head_image');?>)">
      <h1><?php the_field('ta_header');?></h1>
      <h2>Tax &amp; Accounting <i class="triangle"></i></h2>
    </div>
    <div class="block-container">

    </div>
    <div class="bottom-details">
      <div class="person-container">
        <div class="blurb">
          <?php the_field('ta_details');?>
        </div>
        <div class="person-details">
          <div class="name">
            <img class="headshot" src="<?php the_field('ta_image');?>">
            <h3><?php the_field('ta_name');?></h3>
            <p><?php the_field('ta_position');?></p>
          </div>
          <div class="contact">
            <?php the_field('ta_contact');?>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="related-posts">
        <?php $post_object =  get_field('ta_related_1');
        if($post_object):
          $post = $post_object;
          setup_postdata($post);

        ?>
          <a href="<?php the_permalink();?>">
          <article>
            <div class="article-body">
            <?php if(has_post_thumbnail())
            the_post_thumbnail();?>
            <div>
              <p class="article-details"><?php echo get_the_category()[0]->name;?> / <?php echo get_the_date(get_option('date_format'));?></p>
            </div>
            <h3><?php the_title();?></h3>
            <div class="clear"></div>
            </div>
          </article></a>
          <?php wp_reset_postdata();
        endif;?>

        <?php $post_object =  get_field('ta_related_2');
        if($post_object):
          $post = $post_object;
          setup_postdata($post);

        ?>
          <a href="<?php the_permalink();?>">
          <article>
            <div class="article-body">
            <?php if(has_post_thumbnail())
            the_post_thumbnail();?>
            <div>
              <p class="article-details"><?php echo get_the_category()[0]->name;?> / <?php echo get_the_date(get_option('date_format'));?></p>
            </div>
            <h3><?php the_title();?></h3>
            </div>
          </article></a>
          <?php wp_reset_postdata();
        endif;?>
      </div>
    </div>
  </section>
  <section id="business">
    <div class="section-header" style="background-image:url(<?php the_field('bi_head_image');?>)">
      <h1><?php the_field('bi_header');?></h1>
      <h2>Business Improvement <i class="triangle"></i></h2>
    </div>
    <div class="block-container">

    </div>
    <div class="bottom-details">
      <div class="person-container">
        <div class="blurb">
          <?php the_field('bi_details');?>
        </div>
        <div class="person-details">
          <div class="name">
            <img class="headshot" src="<?php the_field('bi_image');?>">
            <h3><?php the_field('bi_name');?></h3>
            <p><?php the_field('bi_position');?></p>
          </div>
          <div class="contact">
            <?php the_field('bi_contact');?>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="related-posts">
        <?php $post_object =  get_field('bi_related_1');
        if($post_object):
          $post = $post_object;
          setup_postdata($post);

        ?>
          <a href="<?php the_permalink();?>">
          <article>
            <div class="article-body">
            <?php if(has_post_thumbnail())
            the_post_thumbnail();?>
            <div>
              <p class="article-details"><?php echo get_the_category()[0]->name;?> / <?php echo get_the_date(get_option('date_format'));?></p>
            </div>
            <h3><?php the_title();?></h3>
            <div class="clear"></div>
            </div>
          </article></a>
          <?php wp_reset_postdata();
        endif;?>

        <?php $post_object =  get_field('bi_related_2');
        if($post_object):
          $post = $post_object;
          setup_postdata($post);

        ?>
          <a href="<?php the_permalink();?>">
          <article>
            <div class="article-body">
            <?php if(has_post_thumbnail())
            the_post_thumbnail();?>
            <div>
              <p class="article-details"><?php echo get_the_category()[0]->name;?> / <?php echo get_the_date(get_option('date_format'));?></p>
            </div>
            <h3><?php the_title();?></h3>
            </div>
          </article></a>
          <?php wp_reset_postdata();
        endif;?>
      </div>
    </div>
  </section>
  <section id="business">
    <div class="section-header" style="background-image:url(<?php the_field('sa_head_image');?>)">
      <h1><?php the_field('sa_header');?></h1>
      <h2>Specialist Advisory <i class="triangle"></i></h2>
    </div>
    <div class="block-container">

    </div>
    <div class="bottom-details">
      <div class="person-container">
        <div class="blurb">
          <?php the_field('sa_details');?>
        </div>
        <div class="person-details">
          <div class="name">
            <img class="headshot" src="<?php the_field('sa_image');?>">
            <h3><?php the_field('sa_name');?></h3>
            <p><?php the_field('sa_position');?></p>
          </div>
          <div class="contact">
            <?php the_field('sa_contact');?>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="related-posts">
        <?php $post_object =  get_field('sa_related_1');
        if($post_object):
          $post = $post_object;
          setup_postdata($post);

        ?>
          <a href="<?php the_permalink();?>">
          <article>
            <div class="article-body">
            <?php if(has_post_thumbnail())
            the_post_thumbnail();?>
            <div>
              <p class="article-details"><?php echo get_the_category()[0]->name;?> / <?php echo get_the_date(get_option('date_format'));?></p>
            </div>
            <h3><?php the_title();?></h3>
            <div class="clear"></div>
            </div>
          </article></a>
          <?php wp_reset_postdata();
        endif;?>

        <?php $post_object =  get_field('sa_related_2');
        if($post_object):
          $post = $post_object;
          setup_postdata($post);

        ?>
          <a href="<?php the_permalink();?>">
          <article>
            <div class="article-body">
            <?php if(has_post_thumbnail())
            the_post_thumbnail();?>
            <div>
              <p class="article-details"><?php echo get_the_category()[0]->name;?> / <?php echo get_the_date(get_option('date_format'));?></p>
            </div>
            <h3><?php the_title();?></h3>
            </div>
          </article></a>
          <?php wp_reset_postdata();
        endif;?>
      </div>
    </div>
  </section>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</main>

<?php get_footer();
