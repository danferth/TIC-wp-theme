<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
        <img src="http://0072015.htslabs.com/wp-content/uploads/2015/08/usa-logo.png" width="125" height="35" alt="Thomson MADE IN USA" />
				<p>&copy; <?php echo date(Y); ?> Thomson Instrument Company • 1121 South Cleveland Street, Oceanside, California 92054<br>
800-541-4792 | 760-757-8080 • 760-757-9367 (fax) • folks@htslabs.com | <a href="http://0072015.htslabs.com/legal/">Legal</a> / <a href="http://0072015.htslabs.com/legal/trademarks/">Trademarks</a></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>



</body>
</html>