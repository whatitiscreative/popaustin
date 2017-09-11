<?php
/**
 * Template Name: Videos
 * Description: Videos Template
 *
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>
<div class="fusion-row">
	<div id="content" <?php Avada()->layout->add_style( 'content_style' ); ?>>
		<!-- Wii Banner Updates -->
		<div class="intro-banner video-banner">
			<h1><?php the_field('hero_headline_videos'); ?></h1>
			<p><?php the_field('hero_intro_text_videos'); ?></p>
		</div>
		<!-- /Wii Banner Updates -->

		<!-- Video Gallery -->
		<section class="gallery-grid lightbox-image-gallery">
			<div class="grid-row">
				<?php while(have_rows('video_grid')): the_row(); ?>
					<div class="gallery-block">
						<a class="swipebox" rel="vimeo" href="<?php echo get_sub_field('video_url'); ?>" style="background-image: url('<?php echo get_sub_field('video_thumbnail'); ?>'); height: 270px; background-size: cover; background-repeat: no-repeat; background-position: center;">
							<span class="play-icon">
								<svg width="66" height="66" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><circle stroke="#FFF" stroke-width="1.5" cx="32" cy="32" r="32"/><path fill="#FFF" d="M24.62 43.642v-24.04l18.022 12.02"/></g></svg>				
							</span>
						</a>
						<p class="photo-caption"><?php the_sub_field('video_title'); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		</section>

		<!-- /Video Gallery -->

	</div>	
</div>
<?php do_action( 'avada_after_content' ); ?>
<?php get_footer();

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
