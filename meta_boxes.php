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



function team_slider_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'team',
		'title' => esc_html__( 'team_meta', 'esoftkulo' ),
		'post_types' => array('team_members'),
		'context' => 'normal',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'fb',
				'type' => 'url',
				'name' => esc_html__( 'Facebook Profile URL', 'esoftkulo' ),
				'placeholder' => esc_html__( 'Enter Facebook Profile URL', 'esoftkulo' ),
			),
			array(
				'id' => $prefix . 'linkedin',
				'type' => 'url',
				'name' => esc_html__( 'LinkedIn Profile URL', 'esoftkulo' ),
				'placeholder' => esc_html__( 'Enter LinkedIn Profile URL', 'esoftkulo' ),
			),
			array(
				'id' => $prefix . 'dribbble',
				'type' => 'url',
				'name' => esc_html__( 'Dribbble Profile URL', 'esoftkulo' ),
				'placeholder' => esc_html__( 'Enter Dribbble Profile URL', 'esoftkulo' ),
			),
			array(
				'id' => $prefix . 'behance',
				'type' => 'url',
				'name' => esc_html__( 'Behance Profile URL', 'esoftkulo' ),
				'placeholder' => esc_html__( 'Enter Behance Profile URL', 'esoftkulo' ),
			),
			array(
				'id' => $prefix . 'google_plus',
				'type' => 'url',
				'name' => esc_html__( 'Google+ Profile URL', 'esoftkulo' ),
				'placeholder' => esc_html__( 'Enter Google+ Profile URL', 'esoftkulo' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'team_slider_meta_box' );


function stepIconColor_meta_box( $meta_boxes ) {
	$meta_boxes[] = array(
		'id' => 'stepiconcolor',
		'title' => esc_html__( 'Color Selection', 'esoftkulo' ),
		'post_types' => array('step_items'),
		'context' => 'normal',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => 'background_color',
				'name' => esc_html__( 'Set Icon Color', 'esoftkulo' ),
				'type' => 'color',
			),
			array(
				'id' => 'icon',
				'type' => 'text',
				'name' => esc_html__( 'Set Icon', 'esoftkulo' ),
				'desc' => esc_html__( 'You can choose icon from this source https://material.io/resources/icons', 'esoftkulo' ),
				'std' => 'code',
			),
		),
	);
	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'stepIconColor_meta_box' );
function how_it_work_meta_box( $meta_boxes ) {
	$meta_boxes[] = array(
		'id' => 'howitworks',
		'title' => esc_html__( 'How It Works', 'esoftkulo' ),
		'post_types' => array('how_it_works'),
		'context' => 'normal',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => 'video_id',
				'type' => 'url',
				'name' => esc_html__( 'Youtube Video URL', 'esoftkulo' ),
			),
		),
	);
	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'how_it_work_meta_box' );

?>

