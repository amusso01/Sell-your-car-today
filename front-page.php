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
</main>

<?php get_footer(); ?>
