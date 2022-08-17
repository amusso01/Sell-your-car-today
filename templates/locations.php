<?php
/**
* Template Name: Locations
*
* @package WordPress
*/
get_header();

$args = array( 
  'post_type' => 'location',
  'posts_per_page' => -1, 
);
$the_query = new WP_Query( $args );
?>
<div id="mapsModal" class="modal fade show" role="dialog" style="display: block;">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color: #0F2F5E;">Cardiff North - CF46 6ST</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <p class="oc-modal-body maps-model-body" style="color: black; text-align: center;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2475.044174992905!2d-3.831814683896601!3d51.65902757966032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e5e7c99edb6af%3A0xa3ba0ba4248a5874!2sThe%20Trade%20Centre%20Wales%20(Neath)!5e0!3m2!1sen!2suk!4v1599496168316!5m2!1sen!2suk" id="gmapIframe" frameborder="0" style="border: 0px; width: 100%; height: 488px;" allowfullscreen="" scrolling="no" aria-hidden="true" tabindex="0" marginheight="0" marginwidth="0"></iframe></p>
            </div>
        </div>
    </div>
</div>

<section class="location-hero">

  <div class="hero-bg" style="background-image:url(<?php echo get_template_directory_uri().'/dist/images/hero-location.jpg' ?>)" ></div>

</section>

<main role="main" class="site-main location-main">


<section class="location-container ">
  <div class="content content-block">
    <h1>Our Locations</h1>

    <div class="locations-grid" id="jsLocation">
      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="card-location">
          <div class="feature-image">
            <figure class="figure">
              <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?> Branch">
            </figure>
          </div>
          <h3><?php echo get_the_title() ?></h3>
          <p class="pcode"><?php echo get_field('post_code')  ?></p>
          <div class="open-hours">
            <?php echo get_field('opening_hours') ?>
          </div>
          <button data-gmap="<?php echo get_field('modal_frame_src') ?>" data-modaltitle="<?php echo get_field('modal_title') ?>" class="btn gmapBtn">Directions</button>
        </div>

        <?php endwhile; ?>

      <?php endif; ?>

      <?php 
      // Reset Post Data
      wp_reset_postdata();
      ?>

    </div>

  </div>
</section>


<section class="content-block map-frame">


  <h2 style="margin-bottom:30px;">Find your nearest branch</h2>
  <div style="width: 100%; overflow: hidden; height: 575px; margin-bottom:80px; margin-left: auto; margin-right:auto;">
    <iframe 
    src="https://www.google.com/maps/d/embed?mid=1SUWRjuQ00X99Um8gZ2u14tDqroDnI8s&ehbc=2E312F"
      width="100%"
      height="600"
      frameborder="0"
      style="border:0; margin-top: -59px;">
    </iframe>
  </div>


</section>


</main><!-- #main -->

<?php
get_footer();