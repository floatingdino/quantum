<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<div class="footer-links">
					<?php wp_nav_menu(array('container_class'=>'menu-footer', 'theme_location'=>'footer-nav'));?>
					<?php wp_nav_menu(array('container_class'=>'social-menu', 'theme_location'=>'social-footer'));?>
					<!-- TODO: LEGAL/ATTRIBUTION MENU -->
				</div>
				<div class="legal">
					<?php wp_nav_menu(array('container_class'=>'legal-menu','theme_location'=>'legal'));?>
					<a class="ply" href="http://madewithply.com">Ply Creative</a>
					<div class="clear"></div>
				</div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<script>
$("button.menu-icon").click(function(){
  $("#mobile-menu").toggle();
	$("button.menu-icon").toggleClass("cross");
	$("header#masthead").toggleClass("menu-open")
});
</script>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
