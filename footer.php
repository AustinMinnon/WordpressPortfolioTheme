<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="row">
			<div class="small-2 columns">
				<a title="Home" class="footer-icons" href="<?php echo esc_url( home_url() ); ?>"><i class="fi fi-home"></i></a>
			</div>
			<div class="small-2 columns">
				<a title="Location" class="footer-icons" href="https://www.google.com/maps/place/Lebanon,+ME/@42.9847512,-71.4478861,9.28z/data=!4m5!3m4!1s0x4cb2cc9bb518f90b:0x9a3ea709edf94a94!8m2!3d43.4006697!4d-70.919379"><i class="fi fi-marker"></i></a>
			</div>
			<div class="small-2 columns">
				<a title="E-Mail" class="footer-icons" href="mailto:austinjminnon@gmail.com"><i class="fi fi-mail"></i></a>
			</div>
			<div class="small-2 columns">
				<a title="Telephone" class="footer-icons" href="tel:2076516220"><i class="fi fi-telephone"></i></a>
			</div>
			<div class="small-2 columns">
				<a title="GitHub"class="footer-icons" href="https://github.com/AustinMinnon"><i class="fi  fi-social-github"></i></a>
			</div>
			<div class="small-2 columns">
				<a title="LinkedIn" class="footer-icons" href="https://linkedin.com/in/AustinMinnon"><i class="fi fi-social-linkedin"></i></a>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
