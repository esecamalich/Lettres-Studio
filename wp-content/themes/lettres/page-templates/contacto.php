<?php
/**
 * Template Name: Contacto
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<!-- CONTACTO -->
	<section class="contacto-container">
		<p>
			Mándanos un mensaje a:<br> 
			<a href="mailto:contacto@lettres.com">contacto@lettres.com</a>
		</p>
		<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
	</section>
	<!-- CONTACTO -->

<?php get_footer(); ?>