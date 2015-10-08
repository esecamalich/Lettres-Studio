<?php
/**
 * Template Name: Home
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

	<!-- INSTAGRAM FEED -->
	<section class="instagram-container">
		<?php
		    function fetch_data($url){
		        $ch = curl_init();
		        curl_setopt($ch, CURLOPT_URL, $url);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		        $result = curl_exec($ch);
		        curl_close($ch);
		        return $result;
		    }
		
		    $count = 10; // the number of photos you want to fetch
		    $access_token = "271905469.ab103e5.ba3b2f3142684f0091e33d74c76d5040";
		    $display_size = "thumbnail"; // you can choose between "low_resolution", "thumbnail" and "standard_resolution"
		
		    $result = fetch_data("https://api.instagram.com/v1/users/1128224759/media/recent/?count={$count}&access_token={$access_token}");
		    $result = json_decode($result);
		?>
		<ul class="instagram-feed">
			<?php foreach ($result->data as $post): ?>
				<li>
					<a href="<?= $post->link ?>">
						<img src="<?= $post->images->standard_resolution->url ?>">
					</a>
				</li>
			<?php endforeach ?> 
		</ul>
	</section>
	<!-- /INSTAGRAM FEED -->
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
	<!-- PORTAFOLIO PREVIEW -->
	<section class="portafolio-preview">
		<ul class="portafolio-list">
			<div>
				<?php 
					$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
					
					if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
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
				<?php	endwhile; endif;
				?>
		</div>
		</ul>
		<a href="index.php/portafolio" class="mas-proyectos">
			Más proyectos <img src="<?php echo get_template_directory_uri(); ?>/images/icon-plus-orange.png" alt="Más" />
		</a>
	</section>
	<!-- PORTAFOLIO PREVIEW -->

<?php get_footer(); ?>