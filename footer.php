  	<footer id="site-footer" role="contentinfo">
			<div class="container-fluid footer">
				<div class="container">
					<div class="row row-1">
						<div class="col-md-4 cont-8_why-us">
							<h3 class="h3-title"><?php the_field('fa.h3_title', 7); ?></h3>
							<p><?php the_field('fa.paragraph', 7); ?></p>
						</div>
						<div class="col-md-4 cont-8_quick-links">
							<h3 class="h3-title"><?php the_field('fb.h3_title', 7); ?></h3>
							<?php $i = 1 ;?>
							<ul class="ul-left">
								<?php while (has_sub_field('fa.menu-left', 7)): ?>
								<li class="li-<?php echo $i; ?>"><a href="<?php the_sub_field('fa.link', 7); ?>"><i class="fa fa-angle-right"></i><?php the_sub_field('fa.element', 7); ?></a></li>
								<?php $i++; ?>
								<?php endwhile; ?>
							</ul>
							<ul class="ul-right">
								<?php while (has_sub_field('fa.menu-right', 7)): ?>
								<li class="li-<?php echo $i; ?>"><a href="<?php the_sub_field('fa.link', 7); ?>"><i class="fa fa-angle-right"></i><?php the_sub_field('fa.element', 7); ?></a></li>
								<?php $i++; ?>
								<?php endwhile; ?>
							</ul>
						</div>
						<div class="col-md-4 cont-8_contact-us">
							<h3 class="h3-title"><?php the_field('fc.h3_title', 7); ?></h3>
							<div class="top">
								<p><?php the_field('fc.paragraph', 7); ?></p>
							</div>
							<div class="bottom">
								<?php while (has_sub_field('fc.list', 7)): ?>
								<p><i class="fa <?php the_sub_field('fc.icon', 7); ?>"></i><?php the_sub_field('fc.text', 7); ?></p>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
					<div class="row row-2">
						<div class="col-md-6 cont-8_footer-copy">
							<p>Copyright © <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">WPGeeks.co.uk</a> - All rights reserved.<br>
							Designed by <a href="http://jacekpuzio.pl" rel="nofollow">jacekpuzio.pl</a></p>
						</div>
						<div class="col-md-6 cont-8_footer-social">
							<?php $i = 1 ;?>
							<ul>
								<?php while (has_sub_field('fd.links', 7)): ?>
								<li class="li-<?php echo $i; ?>"><a href="<?php the_sub_field('fd.link', 7); ?>"><i class="fa <?php the_sub_field('fd.icon', 7); ?>"></i></a></li>
								<?php $i++; ?>
								<?php endwhile; ?>
								<li class="li-top"><a href="#top"><i class="fa fa-reply"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
      <?php wp_footer(); ?>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/slick-carousel/slick/slick.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/pixelperfect/src/pixel-perfect.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/vendor/prefixfree/prefixfree.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/isotope/isotope.min.js"></script>
      <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script> 
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/script.js"></script>
  	</footer>
  </body>
</html>