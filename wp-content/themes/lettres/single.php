<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<!-- PROYECTO -->
	<section class="proyecto-container">
		<?php while ( have_posts() ) : the_post(); ?>
		<!-- INFO PROYECTO -->
			<hgroup class="sec-header title-proyecto">
				<h1>
					<?php the_title(); ?>
				</h1>
				<h2>
					<?php the_field('subtitulo'); ?>
				</h2>
			</hgroup>
			<div class="info-proyecto">
				<ul class="proyecto-details">
					<li>
						<span>Cliente:</span> <?php the_field('cliente'); ?>
					</li>
					<li>
						<span>Año:</span> <?php the_field('ano'); ?>
					</li>
					<li>
						<span>País:</span> <?php the_field('pais'); ?>
					</li>
				</ul>
				<div class="proyecto-desc">
					<?php the_content(); ?>
				</div>
			</div>
			<?php if(get_field('imagenes-proyecto')): ?>
				<?php while(the_repeater_field('imagenes-proyecto')): ?>
					<img src="<?php the_sub_field('imagen'); ?>"/>
				<?php endwhile; ?>
			<?php endif; ?>
		<!-- /INFO PROYECTO -->
		<?php endwhile; // end of the loop. ?>
	</section>
	<!-- PROYECTO -->

<?php get_footer(); ?>