<?php
/**
 * Template Name: Portafolio
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

	<!-- PORTAFOLIO PREVIEW -->
	<section class="portafolio-container">
		<!-- LISTA PORTAFOLIO -->
		<ul class="portafolio-list">
			<?php 
				$i = 1;
				//added before to ensure it gets opened
				echo '<div>';
				$wp_query = new WP_Query( array( 'posts_per_page' => -1 ) );
				
				if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<li style="background-image: url(<?php the_field('header-background'); ?>);">
						<a href="<?php the_permalink(); ?>" class="dark-overlay">
							<div>
								<h1>
									<?php the_title(); ?>
								</h1>
								<span>
									<?php the_field('subtitulo'); ?>
								</span>
							</div>
						</a>
					</li>
				    <?php // if multiple of 3 close div and open a new div
				     if($i % 3 == 0) {echo '</div><div>';}
				
				$i++; endwhile; endif;
				//make sure open div is closed
				echo '</div>';
			?>
		</ul>
		<!-- /LISTA PROTAFOLIO -->
	</section>
	<!-- PORTAFOLIO PREVIEW -->

<?php get_footer(); ?>