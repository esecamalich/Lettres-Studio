<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!-- FOOTER -->
		<footer class="main-footer">
			<!-- SOCIAL LIST -->
			<?php
			
			$defaults = array(
				'theme_location'  => '',
				'menu'            => 'Social Media',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'social-nav',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);
			
			wp_nav_menu( $defaults );
			
			?>
			<!-- /SOCIAL LIST -->
			<!-- FOOTER NAV -->
			<?php
			
			$defaults = array(
				'theme_location'  => 'primary',
				'menu'            => '',
				'container'       => 'nav',
				'container_class' => 'main-nav',
				'container_id'    => '',
				'menu_class'      => 'nav-list',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);
			
			wp_nav_menu( $defaults );
			
			?>
			<!-- /FOOTER NAV -->
			<a href="index.php">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-lettres-black.png" alt="Lettres" />
			</a>
			<p>
				Lettres 2015® Todos los derechos reservados.<br>
				¡Orgullosamente mexicanos!
			</p>
		</footer>
		<!-- /FOOTER -->
		<!-- SCRIPTS -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>
		if (!window.jQuery) {
		    document.write('<script src="js/jquery.js"><\/script>');
		}
		</script>
		<script src="js/selectivizr-min.js"></script>
		<!-- /SCRIPTS -->
	</body>
</html>