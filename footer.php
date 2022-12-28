<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mymax
 */

?>


	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mymax' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'mymax' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'mymax' ), 'mymax', '<a href="http://underscores.me/">Serhii</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- I embeded 29.01.2020 code for Top Button -->
<!-- I inserted 29.01.2020  -->
<!-- Crunchify's Scroll to Top Script -->
<!-- from crunchify.com/how-to-add-smooth-scrolling-back-to-top-button-to-your-wordpress-blog/ -->
<!-- <a href="#" class="crunchify-top">↑</a> -->
<a href="#" class="crunchify-top"><img border="0" src="/wp-content/themes/mymax/images/up2202914.png"></a>



 <!-- I inserted 18.11.2019 from toster.ru/q/409090 for text area by help customizer -->
 <div class="footer-desc"><?php echo nl2br(get_theme_mod('footer_text')); ?></div>


				<!-- I inserted 02/01/2020 -->
				<!-- from https://help-wp.ru/vsplyvayushhaya-forma-wordpress/ -->
<div rel="form1" class="black">
    <div class="big_box_close"></div>
    <div class="form_box">
        <a class="a_close_box">x</a>
        <div class="form_title">Название формы</div>
        <div class="form_form">
            <?php echo do_shortcode('[contact-form-7 id="102" title="Contact form 1"]');?>
        </div><!--form_form-->
    </div><!--form_box-->
</div><!--black-->
						<!-- end -->




<?php wp_footer(); ?>

</body>
</html>

