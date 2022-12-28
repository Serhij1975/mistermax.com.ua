<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mymax
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- ****************************************************************** -->
<!-- I embeded 11.01.2020 for fixed menu -->
<div class="top-fixed-menu">				

	<!-- I embeded from prianiki enot 03.12.2019 -->
	<div class="socialbutton" id="socbutton_pk">

  	 <!-- <b><h3>Зателефонуйте нам сьогодні для запису на заняття +38-068-208-35-36  </h3></b> -->
  	 <!-- <b><h2>Запрошую Вас приєднатися до мне	</h2></b>  -->

<!-- <a target="_blank" rel="nofollow" href="http://plus.google.com/117261778689423011650"><img border="0" src="/wp-content/themes/bakes-and-cakes/images/Google_plus_red.png" style="margin-right: 1px;"></a> -->

<!-- <a target="_blank" rel="nofollow" href="http://instagram.png"><img border="0" src="http://4.bp.blogspot.com/-v6GSE7a-vrQ/U6cUlBrZF-I/AAAAAAAAIAs/uz3l6_qBRoI/s320/instagram.png" style="margin-right: 1px;" /></a> -->

<!-- <a target="_blank" rel="nofollow" href="http://instagram.png"><img border="0" src="/wp-content/themes/bakes-and-cakes/images/intagram.png" style="margin-right: -10px;"></a> -->

<!-- <a target="_blank" rel="nofollow" href="mailto:zakazkonditery@gmail.com"><img border="0" src="/wp-content/themes/bakes-and-cakes/images/mail.png" style="margin-right: -10px;"></a> -->

	<!-- connect to Facebook -->
		<div class="socialbutton2icons">
		<!-- I embeded tel, email and 10.12.2019 -->
			<div class="contacts">	
			<!-- <b><h2>  <a class="phone-style" href="tel:+380682083536">+38(068)208-35-36</a><p class="working-hours">Ежедневно с 10:00 до 22:00</p><a class="email-max" href="mailto:max9ax9@gmail.com">max9ax9@gmail.com</a>  </h2></b> -->
				<h2><a class="phone-style" href="tel:+380682083536">+38(068)208-35-36</a>&nbsp;&nbsp;&nbsp;
				<a class="email-max"   href="mailto:max9ax9@gmail.com">max9ax9@gmail.com</a>&nbsp;&nbsp;&nbsp;
				<p class="working-hours">Ми працюємо щоденно з 10:00 до 22:00</p>&nbsp;&nbsp;&nbsp;
			<!-- <div class="sociallink">		 -->
			<a target="_blank" title="Facebook" rel="nofollow" href="https://www.facebook.com/maksym.aksyonov"><img border="0" src="/wp-content/themes/mymax/images/facebook.png" style="margin-right: 1px;" /></a>
<!-- link for Viber -->
  			<a id="vb_pk" title="Viber" target="_blank" rel="nofollow" href="viber://chat?number=+380954922711"><img border="0" src="/wp-content/themes/mymax/images/viber.png" style="margin-right: -10px;"></a>
  			<a id="vb_mb" title="Viber" target="_blank" rel="nofollow" href="viber://add?number= +380954922711"><img border="0" src="/wp-content/themes/mymax/images/viber.png" style="margin-right: -10px;"></a>
  				<style> 
					#vb_mb{display:none}               	/*for mobile phone*/
						@media (max-width:1024px)
						{ /*когда стр.отображ на экране с разрешением не более 1024px в ширину,примен след правило:*/
						#vb_pk{display:none}            /*for desktop computer*/ 
						#vb_mb{display:block}}          /*for mobile phone*/
			  	</style>
			  	</h2>
			<!-- </div>	   -->
			</div>	  
		</div>
<!-- link for Whatsapp -->
<!-- <a title="WhatsApp" target="_blank" rel="nofollow" href="whatsapp://send?phone=+380954922711"> <img border="0" src="/wp-content/themes/bakes-and-cakes/images/whatsapp.png" style="margin-right: 10px;"> </a> -->
<!-- <a target="_blank" rel="nofollow" href="http://linkedin.com">
<img border="0" src="http://4.bp.blogspot.com/-IeAVfKPKuBY/U6cUmA9FWJI/AAAAAAAAIBk/uclglLdXHTQ/s320/linkedin.png"style="margin-right: 1px;" /></a>
 -->
<!-- <a target="_blank" rel="nofollow" href="http://gmail.com">
<img border="0" src="http://3.bp.blogspot.com/-fBiHKhWCmLk/U6cUmSZfQyI/AAAAAAAAIA0/wiV0VeAbq2U/s320/mail.png"style="margin-right: 1px;" /></a> -->
 
	</div> <!-- end of class socialbutton -->

				<div class="socialbutton_mobiln" id="socbutton_mb">
 	<!-- <a target="_blank" rel="nofollow" href="http://plus.google.com/117261778689423011650"><img border="0" src="/wp-content/themes/bakes-and-cakes/images/Google_plus_red_mob.png" style="margin-right: -10px;"></a> -->
	<!-- <a target="_blank" rel="nofollow" href="http://instagram.png"><img border="0" src="/wp-content/themes/bakes-and-cakes/images/intagram_mob.png" style="margin-right: -10px;"></a> -->

  	<!-- <a target="_blank" rel="nofollow" href="mailto:zakazkonditery@gmail.com"><img border="0" src="/wp-content/themes/bakes-and-cakes/images/mail_mob.png" style="margin-right: -10px;"></a> -->

<!-- link for Facebook -->
<a target="_blank" title="Facebook" rel="nofollow" href="https://www.facebook.com/maksym.aksyonov"><img border="0" src="/wp-content/themes/mymax/images/facebook_mob.png" style="margin-right: 1px;" /></a>                         
<!-- link for Viber -->
  	<a id="vb_pk" title="Viber" target="_blank" rel="nofollow" href="viber://chat?number=+380682083536"><img border="0" src="/wp-content/themes/mymax/images/viber_mob.png" style="margin-right: -10px;"> </a>
  	<a id="vb_mb" title="Viber" target="_blank" rel="nofollow" href="viber://add?number= +380682083536"><img border="0" src="/wp-content/themes/mymax/images/viber_mob.png" style="margin-right: -10px;"> </a>&nbsp;&nbsp;&nbsp;
<!-- link for email -->
<a href="mailto:max9ax9@gmail.com">max9ax9@gmail.com</a>&nbsp;&nbsp;&nbsp;
<!-- class="email-max" -->

	<style> 
		#vb_mb{display:none}           /*for mobile phone*/
  			@media (max-width:1024px){ /*когда стр.отображ на экране с разрешением не более 1024px в ширину,примен след правило*/
  			#vb_pk{display:none}           /*for desktop computer*/ 
  			#vb_mb{display:inline}}        /*for mobile phone*/
  	</style>
<!-- link for Whatsapp -->
  	<!-- <a title="WhatsApp" target="_blank" rel="nofollow" href="whatsapp://send?phone=+380954922711"> <img border="0" src="/wp-content/themes/bakes-and-cakes/images/whatsapp_mob.png" style="margin-right: 10px;"> </a>   -->
				</div><!-- end of class="socialbutton_mobiln" -->
  <style> 
        #socbutton_mb{display:none}     /*for mobile phone*/
        	@media (max-width:1024px){ 	/*когда стр.отображ на экране с разрешением не более 1024px в ширину,примен след правило*/
        	#socbutton_pk{display:none}     /*for desktop computer*/ 
        	/*#socbutton_mb{display:block; margin-left:180px;}}*/
        	#socbutton_mb{display:inline}}  /*for mobile phone*/
  </style>

<!-- ********************************************************************** -->

<!-- <div id="topnavigation"> -->
		<?php 
			// wp_nav_menu( array( 'theme_location' => 'topnavigation' ) ); 
		?> 
<!-- </div> -->


<!-- I embeded 10.12.2019 -->
	<div class="msite-header">					
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mymax' ); ?></button>
			<?php
				wp_nav_menu( 
						array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						// I inserted 09/12/2019
						// https://wp-kama.ru/function/wp_nav_menu

						'items_wrap'     => '<ul><li class="first_item"> <a href="http://mymax/" rel="home">Англійська школа Містера Макса</a></li>%3$s</ul>'
							
						// id="item-id
							) );
			?>
			<?php
			// I embebed 10.01.2020 from theme 2013
			// get_search_form();			
			?>
	</div>
<!-- end -->
<!-- ********************************************************************** -->
</div> <!-- end of class top-fixed-menu -->


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mymax' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			// I blocked 06.12.2019
			// the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$mymax_description = get_bloginfo( 'description', 'display' );
			if ( $mymax_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $mymax_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
				<!-- I embeded 06.12.2019 -->
				<?php the_custom_logo(); ?>	


		</div><!-- .site-branding -->


		<!-- I embeded 21.11.2019 from premium.wpmudev.org/blog/wordpress-development-for-intermediate-users-making-your-themes-customizer-ready/ -->
							<div class="header-right">
								<?php do_action( 'wpmu_in_header' ); ?>
							</div>
<!-- ********************************************************************** -->


		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->



	<div id="content" class="site-content">
