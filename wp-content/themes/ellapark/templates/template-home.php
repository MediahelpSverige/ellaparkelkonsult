<?php 
/* 
Template name: Startsida 
*/ 

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php // Featured image as background image
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');?>	

	<?php // Section 1 ?>
	<section class="home-section1" style="background-image: url('<?php echo $thumb['0'];?>');">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<?php the_field('section1-text'); ?>

					<a href="<?php the_field('section1-button1-link'); ?>" class="btn btn-primary">
						<?php the_field('section1-button1-text'); ?>
					</a>
				</div>
			</div>
		</div>
	</section>

	<?php // Section 2 ?>
	<section class="section2">
		<div class="container">
			<div class="row">
				<article class="col-sm-10 col-xs-12">
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</section>

	<?php // Section 3 ?>
	<section class="section3">
		<div class="container">
			<div class="row">				
				<div class="col-sm-4 col-xs-12 text-center">
					<i class="fa fa-bolt fa-3x" aria-hidden="true"></i>
					<h3>Tjänst 1</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptatem deleniti, iusto porro quasi aut est incidunt eum. 
					</p>
				</div>
				<div class="col-sm-4 col-xs-12 text-center">
					<i class="fa fa-plug fa-3x" aria-hidden="true"></i>
					<h3>Tjänst 2</h3>
					<p>
						Aliquid earum, culpa dolores aspernatur tempore velit beatae porro totam. Et, saepe.
					</p>
				</div>
				<div class="col-sm-4 col-xs-12 text-center">
					<i class="fa fa-microchip fa-3x" aria-hidden="true"></i>
					<h3>Tjänst 3</h3>
					<p>
						Aliquid earum, culpa dolores aspernatur tempore velit beatae porro totam. Et, saepe.
					</p>
				</div>
			</div>
		</div>
	</section>


<?php endwhile; endif; ?>

<?php get_footer(); ?>