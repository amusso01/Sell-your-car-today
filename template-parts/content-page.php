<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-block'); ?>>
<?php if(is_page( 'contact' ) || is_page( '20' ))  : ?>
	<header class="entry-header">
		<h1 class="entry-title">Get in touch with us</h1>
	</header><!-- .entry-header -->
<?php else : ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
<?php endif; ?>

	<div class="entry-content gutten-editor">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->



</article><!-- #post-<?php the_ID(); ?> -->

<?php if(is_page( 'about' ) || is_page( '15' ))  : ?>
	<section class="full-width free-fair">
		<div class="content-block">
			<div class="free-fair__header">
				<h3>IT'S FREE, IT'S FAIR, IT'S TIME TO GET MORE!</h3>
				<p>Go on, find out why more people are selling their car with us. Enter your registration details now!</p>
			</div>
			<div class="checkpoint">
				<ul>
					<li><span class="checkbox-span"><?php  get_template_part( 'svg-template/svg', 'checkbox' ) ?></span> Free, no-obligation valuation instantly</li>
					<li><span class="checkbox-span"><?php  get_template_part( 'svg-template/svg', 'checkbox' ) ?></span> Request a tailored vehicle quote</li>
				</ul>
				<a href="#" class="btn">Let's get started!</a>
			</div>
		</div>
	</section>


	<!-- SLIDER SECTION -->
	<?php get_template_part( 'components/page/brand-carousel' ) ?>

	<!-- EASY SECTION -->
	<?php get_template_part( 'components/page/how-easy' ) ?>

	<!-- FORM -->
	<div class="content-block form-general" style="margin-bottom:190px; max-width:800px; margin:0 auto 190px;">
		<h3 style="margin-bottom:40px;">Say hello!</h3>
		<p style="margin-bottom:20px;">If you’d like to discuss your car’s valuation or ask us about our vehicle valuation process, please feel free to get in touch with our team using the form below. Alternatively, visit our Contact page for more options.</p>
		<!-- <?php get_template_part( 'components/form/general-form' ) ?> -->

		<script>

			hbspt.forms.create({

				region: "na1",

				portalId: "6645024",

				formId: "8541adea-8b03-4151-a623-5219ca962e1e",

				version: "V2_PRERELEASE"

			});

		</script>
	</div>

<?php elseif(is_page( 'help' ) || is_page( '18' ))  : ?>

	<!-- ACCORDION -->
	<?php get_template_part( 'components/page/accordion' ) ?>
		<!-- FORM -->
	<div class="content-block form-general" style="margin-bottom:190px; max-width:800px; margin:0 auto 190px; padding-top:25px; padding-bottom:35px; border-radius:10px;  box-shadow: 2px 4px 6px 1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);">
		<h3 style="margin-bottom:40px;">Say hello!</h3>
		<p>If you’d like to discuss your car’s valuation or ask us about our vehicle valuation process, please feel free to get in touch with our team using the form below. Alternatively, visit our Contact page for more options.</p>
		<?php get_template_part( 'components/form/general-form' ) ?>
	</div>

<?php elseif(is_page( 'contact' ) || is_page( '20' ))  : ?>
	<!-- CONTACT NUMBER -->
	<?php get_template_part( 'components/page/contact' ) ?>

		<!-- FORM -->
		<div class="content-block form-general" style="margin-bottom:190px; max-width:800px; margin:0 auto 190px; padding-top:25px; padding-bottom:35px; border-radius:10px;  box-shadow: 2px 4px 6px 1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);">
		<h3 style="margin-bottom:40px;">Send an enquiry</h3>
		<p style="margin-bottom:30px;">If you’d like to discuss your car’s valuation or ask us about our vehicle valuation process, please feel free to get in touch with our team using the form below. Alternatively, visit our Contact page for more options.</p>
		<!-- <?php get_template_part( 'components/form/general-form' ) ?> -->

		<script>

			hbspt.forms.create({

				region: "na1",

				portalId: "6645024",

				formId: "8541adea-8b03-4151-a623-5219ca962e1e",

				version: "V2_PRERELEASE"

			});

		</script>
	</div>


<?php endif; ?>

<!-- PRE FOOTER -->
<?php get_template_part( 'components/footer/pre-footer' ) ?>