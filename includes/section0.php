<section id="section0" class="ym-wrapper">
<div class="fixer">
 <!--slider avec les nouvelles activites -->
 <?php
	wp_reset_postdata();
	query_posts('cat=2&showposts=5'); ?>
	<?php if ( have_posts() ) : ?>
	<div id="sl" class="ym-wbox">
		<ul class="cycle-slideshow"
			data-cycle-timeout=4000
			data-cycle-fx="scrollHorz"
			data-cycle-slides="li"
			data-cycle-prev="#prev"
			data-cycle-next="#next">
		  <?php while ( have_posts() ) : the_post(); ?>
			<li class="akinfos">
				<a class="ym-grid linearize-level-1" href="<?php the_permalink(); ?>">
					<div class="infos ym-g66 ym-gr text-left">
						<h1><?php the_title(); ?></h1>
						<p>
							<?php the_excerpt();
							?>
						</p>
					</div>
					<div class="imgwrapperslider ym-g33 ym-gl">
						<?php
							if ( has_post_thumbnail()) {
								the_post_thumbnail('large', array('class' => 'flexible'));
							}
						?>
					</div>
				</a>
			</li>
		<?php endwhile; ?>
		</ul>
		<?php else : ?>
			<h2 class="center">Pas de post à la une</h2>
			<p class="center">Pas de post à la une pour l'instant</p>
		<?php
			endif;
			wp_reset_postdata();
		?>
			<div id="zenav" class="center">
				<a href=# id="prev">
					<span class="dashicons dashicons-arrow-left-alt2"></span>
				</a>
				<a href=# id="next">
					<span class="dashicons dashicons-arrow-right-alt2"></span>
				</a>
			</div>
	</div><!--sl-->
	<!--menu vers les differentes sections du site web -->
	<div id="metroak" class="ym-wrapper">
		<div id="where" class="ym-wbox">
			<ul class="moag ym-grid linearize-level-1">
				<li class="ym-g25 ym-gl">
						<div class="ym-gbox">
							<a href="?page_id=27">
								<i class="fa fa-question-circle"></i>
							</a>
							<p>A propos</p>
						</div>
					</li>
					<li class="ym-g25 ym-gl">
						<div class="ym-gbox">
							<a href="#Section-3">
												<i class="fa fa-rocket"></i>
								</a>
							<p>nos projets</p>
						</div>
					</li>
					<li class="ym-g25 ym-gl">
						<div class="ym-gbox">
							<a href="?page_id=6">
								<i class="fa fa-pie-chart"></i>
							</a>
							<p>Expertises</p>
						</div>
					</li>
					<li class="ym-g25 ym-gl">
						<div class="ym-gbox">
							<a href="?page_id=8">
								<i class="fa fa-book"></i>
							</a>
								<p>Publications</p>
						</div>
					</li>
			</ul>
		</div>
	</div>
</div>
	<div class="gobtnwrapper">
							<a class="gobtn" href="#Section-1">
								<i class="fa fa-chevron-down"></i>
							</a>
		</div>
</section>