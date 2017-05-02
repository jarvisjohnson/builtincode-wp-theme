<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

			</div>
							<footer class="row site-footer" id="footer" role="contentinfo">
									<div class="col-md-12 text-center">
												<p class="copyright-text">Built in <a href="http://WordPress.org" target="_blank">WordPress</a> @</p>
												<address>
												Suite 115, <a href="www.java-studios.com/" target="_blank">252 Java St</a><br>Brooklyn NY 11222
												</address>
												<p>Built in Code are Brooklyn-based web site developers</p>
									</div>
											<div class="col-md-12 text-center social-icons hidden-md hidden-lg">
												<ul>
														<li><a href="https://www.facebook.com/SwishWebSolutions/" target="_blank"><i class="fa fa-facebook"></i></a></li>
														<li><a href="https://github.com/SwishWebSolutions" target="_blank"><i class="fa fa-github"></i></a></li>
														<li><a href="https://www.linkedin.com/company/6631219" target="_blank"><i class="fa fa-linkedin"></i></a></li>
														<li><a href="mailto:hello@swish.online" target="_blank"><i class="fa fa-envelope"></i></a></li>
														<li><a href="https://plus.google.com/108508570866696226882/about?gmbpt=true" target="_blank"><i class="fa fa-google-plus"></i></a></li>
														<li><a href="<?php echo site_url();?>/?feed=rss"  target="_blank"><i class="fa fa-rss"></i></a></li>
												</ul>
											</div>
									<div class="col-md-12 text-center">
										<?php $time = current_time( 'Y' ); ?>
											<p class="copyright-text">Copyright &copy; <?php echo $time;?> Built in Code<br>- Shopify - WordPress - Brooklyn Web Development - Built in Code -</p>
									</div>
							</footer>


		</div>
	</div>


</body>
</html>



</div>

<?php wp_footer(); ?>
