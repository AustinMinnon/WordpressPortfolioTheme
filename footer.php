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
			<hr>
			<div class="small-2 columns">
				<a class="footer-icons" href="<?php echo esc_url( home_url() ); ?>"><i class="fi-home"></i></a>
			</div>
			<div class="small-2 columns">
				<a class="footer-icons" href="https://www.google.com/maps/place/Lebanon,+ME/@42.9847512,-71.4478861,9.28z/data=!4m5!3m4!1s0x4cb2cc9bb518f90b:0x9a3ea709edf94a94!8m2!3d43.4006697!4d-70.919379"><i class="fi-marker"></i></a>
			</div>
			<div class="small-2 columns">
				<li><a class="footer-icons" href="mailto:austinjminnon@gmail.com"><i class="fi-mail"></i></a></li>
			</div>
			<div class="small-2 columns">
				<li><a class="footer-icons" href="tel:2076516220"><i class="fi-telephone"></i></a></li>
			</div>
			<div class="small-2 columns">
				<li><a class="footer-icons" href="https://github.com/AustinMinnon"><i class="fi-social-github"></i></a></li>
			</div>
			<div class="small-2 columns">
				<li><a class="footer-icons" href="https://linkedin.com/in/AustinMinnon"><i class="fi-social-linkedin"></i></a></li>
			</div>
			<!-- <div class="large-6 columns">
				<i class="fi-social-facebook"></i>
				<i class="fi-social-twitter"></i>
				<i class="fi-social-pinterest"></i>
				<i class="fi-social-tumblr"></i>
				<i class="fi-social-instagram"></i>

			</div> -->
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
