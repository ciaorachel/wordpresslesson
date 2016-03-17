<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Codeup
 * @since Codeup 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Codeup footer text for footer customization.
				 *
				 * @since Codeup 1.0
				 */
				do_action( 'codeup_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'codeup' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'codeup' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
