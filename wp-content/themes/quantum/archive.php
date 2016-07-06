<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
 get_header(); ?>

 <?php do_action( 'foundationpress_before_content' ); ?>
 <main class="page-resources" role="main">
 	<h1> <?php single_post_title(); ?> </h1>
 	<ul class="filters">
 		<li class="highlight">News</li><li>Whitepapers</li><li>Resources</li><li>Events</li>
 	</ul>
 	<section id="articles">
 		<?php while ( have_posts() ) : the_post(); ?>
 			<article class="<?php get_the_category()?>">
 				<img class="hero">
 				<div class="content">
 					<p class="article-details"><strong><?php get_the_category()?></strong> / <?php echo get_the_date(get_option('date_format'));?></p>
 					<h2><?php the_title();?></h2>
 					<p>We're a new breed of advisors who work with business who work with business owners...</p>
 				</div>
 			</article>
 		<?php endwhile;?>
 	</section>
 </main>
 <?php do_action( 'foundationpress_after_content' ); ?>
 <?php get_footer();
