 <section id="Section-3" class="blue-middle relative">
	<div class="container">
		<div class="row-fluid">
			<div class="span10 offset1 page-header text-center">
				<h3>Nos projets les plus r&eacute;cents</h3>
				<p class="lead">Cliquez sur la miniature d'un projet afin d'afficher sa description</p>
			</div>
		</div>
	</div>
<!--loop des 10 projets les plus récents d'akendewa-->
	<div class="main container">
					<?php
						wp_reset_postdata();
						query_posts('cat=5&showposts=10');
					?>
					<?php
						if ( have_posts() ) :
					?>
				<ul id="og-grid" class="og-grid row-fluid ym-grid linearize-level-1">
				<!--loop des projets-->
					<?php
						while ( have_posts() ) : the_post();
					?>
					<li class="span3 ym-g25 ym-gl">
						<a class="text-center" href="#Section-3" data-largesrc="<?php the_field('visuel_du_projet') ;?>" data-title="<?php the_title() ;?>" data-description="<?php the_excerpt(); ?>">
							<img class="flexible" src="<?php the_field('visuel_du_projet') ;?>"/>
						</a>
					</li>
					<?php
							endwhile;
							endif;
							wp_reset_postdata();
						?>
				</ul>
			</div>
	<div id="rroks" class="ym-wrapper">
	<a id="ocean" class="btn btn-large btn-primary" href="?cat=5">Voir les autres projets d&rsquo;Akendewa</a>
	</div>
 </section>
