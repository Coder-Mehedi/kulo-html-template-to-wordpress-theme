<?php


function banner_add_meta_box() {
	add_meta_box( 'banner_id', 'Banner Button Settings', 'banner_btn_callback', 'top_banner', 'normal', 'default');
}

add_action('add_meta_boxes','banner_add_meta_box');


function banner_btn_callback($post) { 
	wp_nonce_field('banner_meta_box','banner_meta_box_nonce');
	$left_btn_text = get_post_meta( $post->ID, 'left_btn_text', true );
	?>

	<p>
		<label>Left Button Text</label>
		<input type="text" name="left_btn_text" value="<?php echo $left_btn_text ?>">
		<label>Right Button Text</label>
		<input type="text" name="left_btn_text" value="<?php echo $left_btn_text ?>">


	</p>

<?php } ?>

<?php 


function banner_save_meta($post_id) {
	// check if nonce is set
	if (!isset($_POST['banner_meta_box_nonce'])) {
		return;
	}
	// check if nonce is valid
	if (! wp_verify_nonce( $_POST['banner_meta_box_nonce'], 'banner_meta_box')) {
		return;
	}
	// check if input value is set
	if (!isset($_POST['left_btn_text'])){
		return;
	}

	// sanitize user input
	$btn_text = sanitize_text_field( $_POST['left_btn_text']);

	// Update meta field in database
	update_post_meta( $post_id, 'left_btn_text', $btn_text);


}
add_action( 'save_post', 'banner_save_meta' );

?>