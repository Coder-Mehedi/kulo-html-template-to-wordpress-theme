<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-icon">
                            <!-- <h2>Kulo</h2> -->
                            <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ): ?>
                            <img src="<?php echo $logo[0] ?>">
                             <?php else: ?>
                                <a href="#" class="site-name"><h2><?php echo get_bloginfo( 'name' ) ?></h2></a>
                            <?php endif; ?>
                            <p><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a><a href="#"><i aria-hidden="true" class="fa fa-dribbble"></i></a><a href="#"><i aria-hidden="true" class="fa fa-behance"></i></a><a href="#"><i aria-hidden="true" class="fa fa-google-plus"></i></a></p>
                            <h5>&copy; All Right Reserved. dart theme 2017</h5>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="footer-text">
                            <div class="row">
                                <?php dynamic_sidebar( 'footer-1' ); ?>
                                <?php dynamic_sidebar( 'footer-2' ); ?>
                                <?php dynamic_sidebar( 'footer-3' ); ?>
                                <?php dynamic_sidebar( 'footer-4' ); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer() ?>
</body>

</html>