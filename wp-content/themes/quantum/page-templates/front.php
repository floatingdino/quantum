<?php
/*
Template Name: Front
*/
get_header(); ?>

<main class="page-front">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <section class="top-hero" style="background-image:url(<?php the_field('hero');?>)">
    <div class="header-content">
      <h1><?php the_field('header_title');?></h1>
      <?php the_field('header_content');?>
    </div>
  </section>
	<?php if(have_rows('blocks')):?>
		<section class="top-blocks">
			<?php while(have_rows('blocks')):the_row();?>
				<article class="block" style="background-image:url(<?php the_sub_field('background_image');?>)">
					<div>
						<a href="<?php the_sub_field('link'); ?>">
						<h2><?php the_sub_field('tag');?></h2>
						<h3><?php the_sub_field('title');?> <i class="triangle"></i></h3>
						</a>
					</div>
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
					<a href="<?php the_permalink; ?>">
					<div class="headshot">
						<?php the_post_thumbnail(); ?>
					</div>
					<h4><?php the_title(); ?></h4>
					</a>
				</article>
			<?php wp_reset_postdata();endwhile;?>
			<div class="clear"></div>
	</section>
	<?php endif;?>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
</main>


<?php get_footer();
