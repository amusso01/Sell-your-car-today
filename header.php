<?php
/**
 * Main Site Header Template
 * 
 * @author   Andrea Musso
 * 
 * @package  Foundry
 * 
 */

?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--=== GMT head ===-->
	<?php  WPSeed_gtm('head') ?>

	<!-- Google Tag Manager -->

	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

	})(window,document,'script','dataLayer','GTM-5GX2QGT');</script>

	<!-- End Google Tag Manager -->

    <!--=== gmt end ===-->
	<?php wp_head(); ?>
	<!-- Hotjar Tracking Code for https://www.sellyourcartoday.com -->


<!-- TrustBox script -->

<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

<!-- End TrustBox script -->


<!-- Hubspot  -->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>


<!-- HOTJAR -->

<script>

    (function(h,o,t,j,a,r){

        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};

        h._hjSettings={hjid:3132893,hjsv:6};

        a=o.getElementsByTagName('head')[0];

        r=o.createElement('script');r.async=1;

        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;

        a.appendChild(r);

    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');

</script>
</head>

<body <?php body_class(); ?>>
<!--=== GMT body ===-->
<?php WPSeed_gtm('body') ?>


<!-- Google Tag Manager (noscript) -->

<noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-5GX2QGT

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
<!--=== gmt end ===-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'foundry' ); ?></a>
	<header class="site-header">
		<div class="site-header__inner content-block">
			<?php get_template_part( 'components/header/logo' ); ?>
			<?php get_template_part( 'components/navigation/primary' ); ?>

			<?php get_template_part( 'components/header/hamburger' ); ?>
		</div>
		<!-- <?php get_search_form(); ?> -->
	</header><!-- .site-header -->


	<div id="content" class="site-content ">
