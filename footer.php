<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

?>

</div><!-- #content -->

	<footer class="site-footer">
		<div class="site-footer__inner row content-block ">
			<div class="site-footer__item site-footer__left ">

				<?php get_template_part( 'components/navigation/footer-nav' ) ?>
			
			</div>

			<div class="site-footer__item site-footer__center ">

				<figure>
					<img src="<?php echo get_template_directory_uri().'/dist/images/logo-small.png' ?>" alt="small logo">
				</figure>

			</div>
			
			<div class="site-footer__item site-footer__right">

				<div class="site-footer__item-businessinfo">
					<p>Company no. 4921555</p>
					<p>VAT no. 821 833 735</p>
					<?php echo copyright() ?>
				</div>

			</div>
			<div class="site-footer__disclaimer">
				<p>SellYourCarToday.com is a trading name of The Trade Centre Group PLC, a company registered in England and Wales (registered number 4921555). Our registered office is Euro Centre, Neath Abbey Business Park, Neath Abbey, SA10 7DR. The activities carried out by sellyourcartoday.com do not include any activities regulated by the Financial Conduct Authority.</p>
				<p>The Trade Centre Group PLC is authorised and regulated by the Financial Conduct Authority (our registration number is 689365) and using a different trading name (excluding sellyourcartoday.com) and is permitted to carry on relevant regulated consumer credit activities including acting as a credit broker and not a lender.</p>
			</div>
		</div>
	</footer><!-- #colophon -->

	<?php get_template_part( 'components/footer/sticky-mobile' ) ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
