<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<div id="humbum" class="ym-wrapper">

	<div id="mumums" class="ym-wbox">
		<div id="tre" class="ym-grid linearize-level-1">
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php while (have_posts()) : the_post(); ?>
			<div id="goodyear" class="ym-gl ym-g25">
					<div class="ym-gbox">
						<article class="tisane">

							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail('medium');?>
							</a>

							<div id="post-<?php the_ID(); ?>" class="vendettta">
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a>
							</div>

							<div class="palab">
								<?php //posted_on(); ?>
							</div>
						</article>
					</div>
			</div>
			<?php endwhile; ?>

			<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>


	</div>
</div>
<?php
	get_footer();