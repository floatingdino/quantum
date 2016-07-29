<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <main class="page-resources" role="main">
 	<h1> <?php single_post_title(); single_cat_title(); ?> </h1>
 	<ul class="filters">
		<?php wp_list_categories(array('title_li'=>''));?>
 	</ul>
 	<section id="articles">
		<?php do_action( 'foundationpress_before_content' ); ?>
 		<?php while ( have_posts() ) : the_post(); ?>
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
	 					<h2><?php the_title();?></h2>
	 					<p><?php the_excerpt();?></p>
	 				</div>
				</div>
        </a>
 			</article>

 		<?php endwhile;?>
		<?php do_action( 'foundationpress_after_content' ); ?>
		</section>
		<div class="brick-more" onclick="loadNext()">View more</div>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

 </main>
 <?php get_footer();
