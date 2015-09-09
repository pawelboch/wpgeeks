  	<footer id="site-footer" role="contentinfo">
			<div class="container-fluid footer">
				<div class="container">
					<div class="row row-1">
						<div class="col-md-4 cont-8_why-us">
							<h3><?php the_field(''); ?></h3>
							<p><?php the_field(''); ?></p>
						</div>
						<div class="col-md-4 cont-8_quick-links">
							<h3><?php the_field(''); ?></h3>
							<ul>
								<?php while (has_sub_field('')): ?>
								<li><a href=""><i class="fa fa-angle-right"></i></a></li>
								<?php endwhile; ?>
							</ul>
						</div>
						<div class="col-md-4 cont-8_contact-us">
							<h3><?php the_field(''); ?></h3>
							<div class="top">
								<p><?php the_field(''); ?></p>
							</div>
							<div class="bottom">
								<?php while (has_sub_field('')): ?>
								<p><i class="fa <?php the_sub_field(''); ?>"></i><?php the_sub_field(''); ?></p>
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
							<ul>
								<?php while (has_sub_field('')): ?>
								<li class="li-<?php echo $i; ?>"><a href=""><i class="fa <?php the_sub_field(''); ?>"></i></a></li>
								<?php $i++; ?>
								<?php endwhile; ?>
								<li><a href="#top"><i class="fa fa-reply"></i></a></li>
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
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/script.js"></script>
  	</footer>
  </body>
</html>