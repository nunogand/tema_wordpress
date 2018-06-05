<?php
/**
 * Theme Footer
 *
 * @package Kent
 */

	get_sidebar();
?>
		<footer role="contentinfo" id="footer">
			<a href="https://nunogand.com">nunogand</a>
			<span class="sep"> | </span>
			<?php printf( __( 'Tema: %1$s by %2$s.', 'kent' ), 'Kent', '<a href="https://prothemedesign.com/" rel="designer">Pro Theme Design</a>' ); ?>
		</footer>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
