<?php
/**
 * Theme Footer
 *
 * @package Kent
 */

	get_sidebar();
?>
		<footer role="contentinfo" id="footer">
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'kent' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'kent' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'kent' ), 'Kent', '<a href="https://prothemedesign.com/" rel="designer">Pro Theme Design</a>' ); ?>
		</footer>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
