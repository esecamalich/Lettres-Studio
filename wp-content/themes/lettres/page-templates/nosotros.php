<?php
/**
 * Template Name: Nosotros
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

	<!-- NOSOTROS -->
	<section class="nosotros-container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="info-nosotros">
				<?php the_content(); ?>
			</div>
			<!-- CONTÁCTANOS -->
			<section class="trabajar-contigo">
				<hgroup class="sec-header">  
					<h3>
						Un texto sobre
					</h3>
					<h1>
						Lo mucho que nos gusta
					</h1>
					<h2>
						chambear contigo
					</h2>
				</hgroup>
				<a class="btn-orange" href="index.php/contacto">
					Contáctanos
				</a>
			</section>
			<!-- /CONTÁCTANOS -->
			<?php if(get_field('imagenes-nosotros')): ?>
				<?php while(the_repeater_field('imagenes-nosotros')): ?>
					<img src="<?php the_sub_field('img-nosotros'); ?>"/>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endwhile; // end of the loop. ?>
	</section>
	<!-- NOSOTROS -->

<?php get_footer(); ?>