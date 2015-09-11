<?php

/*
Template Name: Portfolio
*/

?>

<?php get_header(); ?>

<div class="main main-portfolio">
	<div class="container-fluid cont-1">
		<div class="container">
			<div class="row row-1">
				<div class="col-md-12">
					<h1 class="h1-title"><?php the_field('2a.title'); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid cont-2">
		<div class="container">
			<div class="row row-2">
				<div class="col-md-12">
					<div class="row row-in-1">
						<div class="projects-slider">
						  <?php while (has_sub_field('2a.projects')): ?>
						  <div class="slide <?php the_sub_field('2a.tag'); ?>">
						    <div class="col-md-8">
						    	<img src="<?php the_sub_field('2a.image'); ?>" alt="">
						    </div>
							  <div class="col-md-4">
							  	<p class="date"><i><?php the_sub_field('2a.date'); ?></i></p>
							  	<h2 class="title"><?php the_sub_field('2a.title'); ?></h2>
							  	<p class="desc"><?php the_sub_field('2a.description'); ?></p>
							  	<p class="tags"><strong>Tags: </strong><?php the_sub_field('2a.tag'); ?></p>
							  	<a href="2a.link" class="btn btn-1">Visit on-line</a>
							  </div>
						  </div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-3">
				<div class="col-md-12">
					<div class="projects-thumbnails">
						<?php while (has_sub_field('2a.projects')): ?>
						<div class="slide <?php the_sub_field('2a.tag'); ?>">
							<img src="<?php the_sub_field('2a.image'); ?>" alt="">
							<h3 class="title"><?php the_sub_field('2a.title'); ?></h3>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?> 