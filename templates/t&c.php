<?php
/**
* Template Name: T&C
*
* @package WordPress
*/
get_header();
?>

<main role="main" class="site-main t&c  ">
    <article id="post-<?php the_ID(); ?>" <?php post_class('content-block'); ?>>

        <section style="max-width:820px; margin-left:auto; margin-right:auto; margin-top:40px">
            <header class="entry-header" style="margin-bottom:30px">
                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
            </header><!-- .entry-header -->
    
            <?php the_content() ?>

        </section>
    </article>

</main><!-- #main -->

<?php
get_footer();