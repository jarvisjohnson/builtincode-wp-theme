<?php
/**
 * Template Name: Portfolio
 *
 */

get_header(); ?>

<div class="banner-bg" id="top">
		<div class="banner-overlay"></div>
		<div class="welcome-text">
				<h2>Blog
					<?php if (is_single()) {
					echo ' - ' . the_title();
				}
				?>
			</h2>
				<h5>Some notes from our journey as web developers. Thoughts on web trends and technologies. Helpful tools we come across and use. Our workflows and plans.</h5>
		</div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="fluid-container">

				<div class="content-wrapper">

					<!-- PROJECTS -->
					<div class="page-section" id="projects">
					<div class="row">
							<div class="col-md-12">
									<h4 class="widget-title">PHOTOS OF WHAT I DO</h4>
									<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
							</div>
					</div>
					<div class="row projects-holder">
							<div class="col-md-4 col-sm-6">
									<div class="project-item">
											<img src="<?php echo get_template_directory_uri() ?>/img/1.jpg" alt="">
											<div class="project-hover">
													<div class="inside">
															<h5><a href="#">Pellentesque porta ligula</a></h5>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
													</div>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-sm-6">
									<div class="project-item">
											<img src="<?php echo get_template_directory_uri() ?>/img/2.jpg" alt="">
											<div class="project-hover">
													<div class="inside">
															<h5><a href="#">Pellentesque porta ligula</a></h5>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
													</div>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-sm-6">
									<div class="project-item">
											<img src="<?php echo get_template_directory_uri() ?>/img/3.jpg" alt="">
											<div class="project-hover">
													<div class="inside">
															<h5><a href="#">Pellentesque porta ligula</a></h5>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus.</p>
													</div>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-sm-6">
									<div class="project-item">
											<img src="<?php echo get_template_directory_uri() ?>/img/4.jpg" alt="">
											<div class="project-hover">
													<div class="inside">
															<h5><a href="#">Pellentesque porta ligula</a></h5>
															<p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
													</div>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-sm-6">
									<div class="project-item">
											<img src="<?php echo get_template_directory_uri() ?>/img/5.jpg" alt="">
											<div class="project-hover">
													<div class="inside">
															<h5><a href="#">Pellentesque porta ligula</a></h5>
															<p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
													</div>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-sm-6">
									<div class="project-item">
											<img src="<?php echo get_template_directory_uri() ?>/img/6.jpg" alt="">
											<div class="project-hover">
													<div class="inside">
															<h5><a href="#">Pellentesque porta ligula</a></h5>
															<p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
													</div>
											</div>
									</div>
							</div>
					</div> <!-- .projects-holder -->
					</div>
					<hr>

<?php get_footer(); ?>
