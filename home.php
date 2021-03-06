<?php

/*
Template Name: Home
*/

?>

<?php get_header(); ?>

<div class="main main-home">
	<a id="top" class="anchor"></a>
	<div class="container-fluid cont-1">
		<div class="main-slider">
			<?php while (has_sub_field('1a.main_slider')): ?>
			<div class="slide" style="background: url(<?php the_sub_field('1a.slide_foto'); ?>);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text">
								<?php the_sub_field('1a.slide_text'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<a id="what-we-do" class="anchor"></a>
	<div class="container-fluid cont-2">
		<div class="container">
			<div class="row row-1">
				<div class="col-md-12">
					<h2 class="h2-title"><?php the_field('1b.h2_title'); ?></h2>
				</div>
			</div>
			<div class="row row-2">
				<?php while (has_sub_field('1b.blocks')): ?>
				<div class="col-md-4 cont-2_we-do">
					<i class="fa <?php the_sub_field('1b.icon'); ?>"></i>
					<h3><?php the_sub_field('1b.h3'); ?></h3>
					<p><?php the_sub_field('1b.paragraph'); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<div class="container-fluid cont-3">
		<div class="container">
			<div class="row row-1">
				<div class="col-md-12">
					<h2 class="h2-title"><?php the_field('1c.h2_title'); ?></h2>
				</div>
			</div>
			<div class="col-md-12 custom-col">
				<div class="row row-2">
					<?php $i = 1 ;?>
					<?php $k = 2 ;?>
					<?php while (has_sub_field('1c.persons')): ?>
					<div class="col-md-3 col-<?php echo $i; ?> cont-3_person">
						<a href="<?php the_sub_field('1c.link_to'); ?>" style="background: url(<?php the_sub_field('1c.foto'); ?>);">	
							<div class="normal-div">
								<h3><?php the_sub_field('1c.name'); ?></h3>
								<p><?php the_sub_field('1c.role'); ?></p>
							</div>
							<div class="hover-div">
							  <i class="fa <?php the_sub_field('1c.icon'); ?>"></i>
							</div>
						</a>
					</div>
					<?php if($i % 4 == 0 && $i < $k) echo '</div><div class="row row-custom">'; ?>
					<?php $i++; ?>
					<?php $k++; ?>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="row row-4">
				<div class="col-md-12">
					<a href="<?php the_field('1c.link'); ?>" class="btn btn-1">Read more about us</a>
				</div>
			</div>
		</div>
	</div>
	<a id="portfolio" class="anchor"></a>
	<div class="container-fluid cont-4">
		<div class="container">
			<div class="row row-1">
				<div class="col-md-12">
					<h2 class="h2-title"><?php the_field('1d.h2_title'); ?></h2>
				</div>
			</div>
			<div class="row row-2">
				<div class="col-md-12">
					<div class="portfolio-slider">
						<?php while (has_sub_field('1d.projects')): ?>
						<div class="slide">
							<div class="col-md-7 col-md-pull-7 cont-4_img">
								<img src="<?php the_sub_field('1d.image'); ?>" alt="">
							</div>
							<div class="col-md-5 col-md-push-5 cont-4_desc">
								<h3><?php the_sub_field('1d.name'); ?></h3>
								<p><?php the_sub_field('1d.description'); ?></p>
								<a href="<?php the_sub_field('1d.link_to'); ?>" class="btn btn-2">Go to portfolio</a>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a id="testimonials" class="anchor"></a>
	<div class="container-fluid cont-5">
		<div class="container">
			<div class="row row-1">
				<div class="col-md-12">
					<h2 class="h2-title"><?php the_field('1e.h2_title'); ?></h2>
				</div>
			</div>
			<div class="row row-2">
				<div class="col-md-12">
					<div class="testimonial-slider">
						<?php while (has_sub_field('1e.testimonials')): ?>
						<div class="slide">
							<div class="cont-5_testimonial">
								<p><i><?php the_sub_field('1e.content'); ?></i></p>
							</div>
							<div class="cont-5_author">
								<p><strong><?php the_sub_field('1e.author'); ?></strong></p>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a id="contact" class="anchor"></a>
	<div class="container-fluid cont-6">
		<div class="col-md-6"></div>
		<div class="col-md-6 cont-6_map">
			<div id="map"></div>
		</div>
		<div class="container">
			<div class="row row-1">
				<div class="col-md-7 cont-6_contact">
					<div class="row row-in-1">
						<div class="col-md-12">
							<h2 class="h2-title"><?php the_field('1f.h2_title'); ?></h2>
						</div>
					</div>
					<div class="row row-in-2">
						<div class="col-md-6 col-custom cont-6_contact_left">
							<?php echo do_shortcode( '[contact-form-7 id="59" title="Contact form"]' ) ?>
						</div>
						<div class="col-md-6 col-custom cont-6_contact_right">
							<div class="top">
								<?php the_field('1f.text'); ?>
							</div>
							<div class="bottom">
								<?php while (has_sub_field('1f.list')): ?>
								<p><i class="fa <?php the_sub_field('1f.icon'); ?>"></i><?php the_sub_field('1f.text'); ?></p>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5"></div>
			</div>
		</div>
	</div>
	<div class="container-fluid cont-7">
		<div class="container">
			<div class="row row-1">
				<div class="col-md-12">
					<h2 class="h2-title"><?php the_field('1g.h2_title'); ?></h2>
				</div>
			</div>
			<div class="row row-2">
				<div class="col-md-12">
					<div class="group-slider">
						<?php while (has_sub_field('1g.group')): ?>
						<div class="slide cont-7_group">
							<a href="<?php the_sub_field('1g.link'); ?>"><img src="<?php the_sub_field('1g.logo'); ?>" alt=""></a>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?> 