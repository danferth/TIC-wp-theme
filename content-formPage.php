<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if(isset($_GET['success'])){
	$form_success = $_GET['success'];
}

$first_name = $_GET['first_name'];

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
						
				<?php

				the_content();
				?>

			</form>
			
			<?php
			edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<script type="text/javascript">
<?php
if($form_success == "true"){
	echo "
		window.onload = swal({
			title: 'Success',
			text: '<b>" . $first_name . "</b> your submission was a success we will contact you shortly about your inquiry!',
			type: 'success',
			html: true,
			confirmButtonText: 'Thanks'
		});
	";
}elseif($form_success == "false"){
	echo "
		window.onload = swal({
			title: 'Whoops',
			text: 'Our apologies but there was an error <b>" . $first_name . "</b>, we have logged this and will have a fix soon!',
			type: 'error',
			html: true,
			confirmButtonText: 'well shit!'
		});
	";
}

?>





<?php 
echo 'onload=function(){document.forms["' . $form_id .'"].reset()};
jQuery(document).ready(function($){
$("#' . $form_id . '").validate();
});'; ?>
</script>
