<?php
/**
 * The template for displaying frontpage by default
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>

<section class="site-hero">
	
	<?php get_template_part( 'components/front/hero' ); ?>

</section>

<main class="main homepage-main" role="main">
	<!-- EASY SECTION -->
	<?php get_template_part( 'components/page/how-easy' ) ?>
	<!-- WHY SELL SECTION -->
	<?php get_template_part( 'components/front/why-sell' ); ?>

	<!-- TRUSTPILOT -->
	<?php get_template_part( 'components/front/trustpilot' ); ?>

	<section class="home-image">
		<ul class="content-block">
			<li><img src="<?php echo get_template_directory_uri().'/dist/images/home-image-1.jpg' ?>"></li>
			<li><img src="<?php echo get_template_directory_uri().'/dist/images/home-image-2.jpg' ?>"></li>
			<li><img src="<?php echo get_template_directory_uri().'/dist/images/home-image-3.jpg' ?>"></li>
			<li><img src="<?php echo get_template_directory_uri().'/dist/images/home-image-4.jpg' ?>"></li>
		</ul>
	</section>
</main>

<?php get_footer(); ?>
