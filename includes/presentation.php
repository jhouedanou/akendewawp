<!--presentation akendewa-->
<section id="Section-1" class="blue-dark ym-wrapper">
	<div id="fade-it" class="container relative ym-wbox text-left">
		<div class="row">
			<div class="span10 offset1 page-header text-left">
					<?php
							query_posts('p=11');
							global $more;
							$more = 0;
							while (have_posts()) : the_post();
							  ?>
							  <h2>
								<?php
									the_title();
								?>
							  </h2>
							<div class="lead">
								<?php
								  the_content();
								?>
							</div> 
							<?php
							endwhile;
						?>
			</div> 
		</div>	
	</div>	

	  <div class="gobtnwrapper" style="margin-bottom:-60px;">
		<a class="gobtn blue-middle" href="#panel-first"><i class="icon-chevron-down icon-large"></i></a>
	  </div>
 <!-- /GO BTN WRAPPER-->
		<div class="gobtnwrapper">
							<a class="gobtn" href="#panel-first">
								<i class="fa fa-chevron-down"></i>
							</a>
		</div>

	<div id="panel-first" class="well panel alt blue-middle">
		<div class="container relative">
			<div class="row-fluid">
				<div class="span4 offset1">
					<p id="ree" class="lead">
					 	<i class="fa fa-exclamation-triangle"></i> Alertes
					</p>
					<?php
					wp_reset_postdata();
					query_posts('cat=4&showposts=5'); ?>
					<?php if ( have_posts() ) : ?>
					<ul class="cycle-slideshow"
						data-cycle-timeout=4000
						data-cycle-fx="scrollHorz"
						data-cycle-slides="li">
					  <?php while ( have_posts() ) : the_post(); ?>
						<li class="akinfos">
							<a class="redz" href="<?php the_permalink(); ?>">
									<h1><?php the_title(); ?></h1>
							</a>
						</li>
						<?php 
							endwhile;
							endif;
							wp_reset_postdata();
						?>
					</ul>
					<hr>
				</div>
				
			</div>
<!-- GO BTN WRAPPER-->
	  <div class="gobtnwrapper" style="margin-bottom:-55px;">
		<a class="gobtn blue-dark" href="#Section-2"><i class="icon-chevron-down icon-large"></i></a>
	  </div>
 <!-- /GO BTN WRAPPER-->
		</div>
		
</div><!-- / CONTAINER-->

	<div class="gobtnwrapper">
							<a class="gobtn" href="#Section-3">
								<i class="fa fa-chevron-down"></i>
							</a>
		</div>
</section>