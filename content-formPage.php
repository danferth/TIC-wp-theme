<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

$form_success = $_GET['success'];


if(get_post_meta($post->ID, "form-parse")){
$parse = '/wp-content/themes/TIC/form-parse/' . get_post_meta($post->ID, "form-parse", true) . '.php';
}

if(get_post_meta($post->ID, "form-ID")){
$form_id = get_post_meta($post->ID, "form-ID", true);
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Page thumbnail and title.
		twentyfourteen_post_thumbnail();
		the_title( '<header class="full-page-entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
	?>

	<div class="entry-content-full-page">
			<?php echo "<form action='" . $parse . "' method='POST' id='" . $form_id . "'>"; ?>
						
				<?php the_content(); ?>

			</form>
			
			<?php
			edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<script type="text/javascript">
<?php 
echo 'onload=function(){document.forms["' . $form_id .'"].reset()};
jQuery(document).ready(function($){
$("#' . $form_id . '").validate();
});'; ?>
</script>
