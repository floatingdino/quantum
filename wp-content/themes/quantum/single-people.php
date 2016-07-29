<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<main class="people-single">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article class="person-single" id="person-content">
		<div class="entry-content">
      <div class="sidebar">
		<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
		?>
      </div>
      <div class="right">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <h3><?php the_field('position'); ?></h3>
    <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<?php the_content(); ?>
    <h2>Contact <?php if(get_field('email')){ ?> <a class="email" href="mailto:<?php the_field('email'); ?>"></a><?php } if(get_field('linkedin')){ ?> <a class="linkedin" href="<?php the_field('linkedin'); ?>"></a><?php } ?> </h2>
    </div>
		</div>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</main>
<?php get_footer();
