<?php if(!is_page(array('679', '681'))) : ?>

<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
<section class="client-logo darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="all-client-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/1.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/2.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/3.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/4.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/5.jpg" alt="" /></a>
						</div>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- end client section -->
		<?php endif; ?>
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
		<footer>
			<div class="primary-footer">
				<div class="container">
					<div class="row">
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-4">
							<div class="footer-widget about-us">
							<?php dynamic_sidebar('footer-1'); ?>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-2">
							<div class="footer-widget usefull-link">
								<h3>Useful Links</h3>
								<?php dynamic_sidebar('footer-2'); ?>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-widget latest-post">
								<?php dynamic_sidebar('footer-3'); ?>
							</div>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<div class="footer-widget news-letter">
								<h3>NewsLetter Subscription</h3>
								<p>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</p>

								<form class="subscribe-form mailchimp" method="post">
                                    <div class="clearfix">
                                        <div class="input-wrapper">
                                          <label class="sr-only" for="email">Email</label>
                                          <input id="subscribeEmail" type="email" name="subscribeEmail" class="validate form-control" placeholder="Your Email Please!">
                                          <button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
                                        </div>
                                    </div>
                                    <!-- to showing success messages -->
                                    <p class="subscription-success"></p>
								</form>
							</div><!-- /.news-letter -->
						</div><!-- end single footer widget -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.primary-footer -->

			<!-- footer copyright area -->
			<div class="copyright-wrapper text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>Copyright@2017 Neuron Finance Inc. All Rights Reserved. Beautiful WordPress Theme By <a href="#">TrendyTheme</a></p>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- ./end copyright-wrapper -->
		</footer>

		
		<?php wp_footer(); ?>
	</body>
</html>