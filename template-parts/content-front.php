<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<?php get_template_part( 'components/page/how-easy' ) ?>

</section><!-- #post-<?php the_ID(); ?> -->
