<?php
 get_header();
?>

<div id="humbum" class="ym-wrapper">

	<div id="mumum" class="ym-wbox">
		<div id="trez" class="ym-grid linearize-level-1">
			<div id="good" class="ym-g66 ym-gl">
				<div class="ym-gbox">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

								<div class="entry-content">
									<div class="poset">
										<?php posted_on(); ?>
									</div>
									<?php the_content(); ?>

									<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

									<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>



								</div>

								<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>

							</article>

						<?php comments_template(); ?>

						<?php endwhile; endif; ?>

					<?php post_navigation(); ?>

				</div>
			</div>
			<div id="kiddo" class="ym-g33 ym-gr">
				<div class="ym-gbox">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	get_footer();
?>