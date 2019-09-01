<?php


function kulo_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer One', 'esoftkulo' ),
			'id'            => 'footer-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'esoftkulo' ),
			'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-xs-6 %2$s"><div class="footer-text-single">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Two', 'esoftkulo' ),
			'id'            => 'footer-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'esoftkulo' ),
			'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-xs-6 %2$s"><div class="footer-text-single">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Three', 'esoftkulo' ),
			'id'            => 'footer-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'esoftkulo' ),
			'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-xs-6 %2$s"><div class="footer-text-single">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Four', 'esoftkulo' ),
			'id'            => 'footer-4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'esoftkulo' ),
			'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-xs-6 %2$s"><div class="footer-text-single">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

}
add_action( 'widgets_init', 'kulo_widgets_init' );

?>