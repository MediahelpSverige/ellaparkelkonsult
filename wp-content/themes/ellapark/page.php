<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php // Page section ?>
	<section class="section-main">
		<div class="container">
			<div class="row">
				<article class="col-sm-10 col-xs-12">
					
					<h1>
						<?php the_title(); ?>						
					</h1>

					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</section>	


<?php endwhile; endif; ?>

<?php get_footer(); ?>