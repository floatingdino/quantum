<?php
/*
Template Name: Resources
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<main role="main">
	<h1> <?php single_post_title(); ?> </h1>
	<ul class="filters">
		<li class="highlight">News</li><li>Whitepapers</li><li>Resources</li><li>Events</li>
	</ul>
	<section id="articles">
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="news">
				<img class="hero">
				<div class="content">
					<p class="article-details"><strong>News</strong> / 06 Jun 2016</p>
					<h2>How to Manage Your Trust Distribution This EOFY</h2>
					<p>We're a new breed of advisors who work with business who work with business owners...</p>
				</div>
			</article>
		<?php endwhile;?>
	</section>
</main>
<?php do_action( 'foundationpress_after_content' ); ?>







<?php get_footer();
