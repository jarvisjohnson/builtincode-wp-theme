<!--
MOBILE SIDEBAR
-->
			<sidebar class="responsive-header visible-xs visible-sm">
					<div class="container">
							<div class="row">
									<div class="col-md-12">
											<div class="top-section">
													<div class="profile-image">
															<img src="<?php echo get_template_directory_uri() ?>/img/in-code-iconz.svg" alt="Brooklyn Shopify Developers">
													</div>
													<div class="profile-content">
														<img class="profile-title" src="<?php echo get_template_directory_uri() ?>/img/built-in-code-darkbg.svg" alt="Brooklyn eCommerce eCommerce Developers">
														<p class="profile-description">eCommerce Developers</p>
													</div>
											</div>
									</div>
							</div>
							<a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
							<div class="main-navigation responsive-menu" id="responsive-menu">
							<ul class="navigation">
								 <?php if (is_front_page()){ ?>
									 <li><a href="#top"><i class="fa fa-globe"></i>Welcome</a></li>
									 <li><a href="#projects"><i class="fa fa-picture-o"></i>Portfolio</a></li>
									 <li><a href="#capabilities"><i class="fa fa-code"></i>Capabilities</a></li>
									 <li><a href="#contact"><i class="fa fa-hand-peace-o"></i>Contact</a></li>
									 <li><a href="#Pricing"><i class="fa fa-ticket"></i>Pricing</a></li>
									 <li><a href="<?php echo the_permalink(2)?>"><i class="fa fa-quote-left"></i>Articles</a></li>
									 <li><a href="http://keptincloud.com/whmcs/" onclick="window.location='http://keptincloud.com/whmcs/';"><i class="fa fa-users"></i>Client Login</a></li>
								<?php }
								elseif (is_home()){ ?>
									<li><a href="<?php echo the_permalink(9)?>"><i class="fa fa-home"></i>Home</a></li>
									<li><a href="#top"><i class="fa fa-quote-left"></i>Articles</a></li>
									<li><a href="http://keptincloud.com/whmcs/" onclick="window.location='http://keptincloud.com/whmcs/';"><i class="fa fa-users"></i>Client Login</a></li>
								<?php }
								elseif (is_archive()){ ?>
									<li><a href="<?php echo the_permalink(9)?>"><i class="fa fa-home"></i>Home</a></li>
									<li><a href="<?php echo the_permalink(2)?>"><i class="fa fa-quote-left"></i>Articles</a></li>
									<li><a href="http://keptincloud.com/whmcs/" onclick="window.location='http://keptincloud.com/whmcs/';"><i class="fa fa-users"></i>Client Login</a></li>
								<?php }
								else { ?>
									<li><a href="<?php echo the_permalink(9)?>"><i class="fa fa-home"></i>Home</a></li>
								 <li><a href="<?php echo the_permalink(2)?>"><i class="fa fa-quote-left"></i>Articles</a></li>
									<li><a href="#single-top" class="active"><i class="fa fa-quote-right"></i><?php
												$thetitle = $post->post_title;
												$getlength = strlen($thetitle);
												$thelength = 16;
												echo substr($thetitle, 0, $thelength);
												if ($getlength > $thelength) echo "...";
												?></a></li>
									<li><a href="http://keptincloud.com/whmcs/" onclick="window.location='http://keptincloud.com/whmcs/';"><i class="fa fa-users"></i>Client Login</a></li>
								<?php }; ?>
							 </ul>
							</div> <!-- .main-navigation -->
					</div>
			</sidebar>
<!--
FIXED SIDEBAR
-->
		 <sidebar class="sidebar-menu hidden-xs hidden-sm">
				 <div class="top-section">
						 <div class="profile-image">
								 <img src="<?php echo get_template_directory_uri() ?>/img/in-code-iconz.svg" alt="Brooklyn Shopify Developers">
						 </div>
						 <img class="profile-title" src="<?php echo get_template_directory_uri() ?>/img/built-in-code-darkbg.svg" alt="Brooklyn eCommerce web site developers">
						 <p class="profile-description">eCommerce Developers</p>
				 </div> <!-- top-section -->
				 <div class="main-navigation">
					 <ul class="navigation">
						 	<?php if (is_front_page()){ ?>
								<li><a href="#top"><i class="fa fa-globe"></i>Welcome</a></li>
								<li><a href="#projects"><i class="fa fa-picture-o"></i>Portfolio</a></li>
								<li><a href="#capabilities"><i class="fa fa-code"></i>Capabilities</a></li>
								<li><a href="#contact"><i class="fa fa-hand-peace-o"></i>Contact</a></li>
								<li><a href="#Pricing"><i class="fa fa-ticket"></i>Pricing</a></li>
								<li><a href="<?php echo the_permalink(2)?>"><i class="fa fa-quote-left"></i>Articles</a></li>
								<li><a href="http://keptincloud.com/whmcs/" onclick="window.location='http://keptincloud.com/whmcs/';"><i class="fa fa-users"></i>Client Login</a></li>
						 <?php }
						 elseif (is_home()){ ?>
							 <li><a href="<?php echo the_permalink(9)?>"><span class="left-align-menu"><i class="fa fa-home"></i>Home</span></a></li>
							 <li><a href="#top"><span class="left-align-menu"><i class="fa fa-quote-left"></i>Articles</span></a></li>
							 <li><a href="http://keptincloud.com/whmcs/" onclick="window.location='http://keptincloud.com/whmcs/';"><i class="fa fa-users"></i>Client Login</a></li>
						 <?php }
						 elseif (is_archive()){ ?>
							 <li><a href="<?php echo the_permalink(9)?>"><span class="left-align-menu"><i class="fa fa-home"></i>Home</span></a></li>
							 <li><a href="<?php echo the_permalink(2)?>"><span class="left-align-menu"><i class="fa fa-quote-left"></i>Articles</span></a></li>
							 <li><a href="http://keptincloud.com/whmcs/" onclick="window.location='http://keptincloud.com/whmcs/';"><i class="fa fa-users"></i>Client Login</a></li>
						 <?php }
						 else { ?>
							 <li><a href="<?php echo the_permalink(9)?>"><span class="left-align-menu"><i class="fa fa-home"></i>Home</span></a></li>
							<li><a href="<?php echo the_permalink(2)?>"><span class="left-align-menu"><i class="fa fa-quote-left"></i>Articles</span></a></li>
							 <li><a href="#single-top" class="active"><span class="left-align-menu"><i class="fa fa-quote-right"></i><?php
										 $thetitle = $post->post_title;
										 $getlength = strlen($thetitle);
										 $thelength = 16;
										 echo substr($thetitle, 0, $thelength);
										 if ($getlength > $thelength) echo "...";
										 ?></span></a></li>
							<li><a href="http://keptincloud.com/whmcs/" onclick="window.location='http://keptincloud.com/whmcs/';"><i class="fa fa-users"></i>Client Login</a></li>										 
						 <?php }; ?>
						</ul>
				 </div> <!-- .main-navigation -->
				 <div class="social-icons">
						 <ul>
								 <li><a href="https://www.facebook.com/SwishWebSolutions/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								 <li><a href="https://github.com/SwishWebSolutions" target="_blank"><i class="fa fa-github"></i></a></li>
								 <li><a href="https://www.linkedin.com/company/6631219" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								 <li><a href="mailto:hello@swish.online" target="_blank"><i class="fa fa-envelope"></i></a></li>
								 <li><a href="https://plus.google.com/108508570866696226882/about?gmbpt=true" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						 </ul>
				 </div> <!-- .social-icons -->
		 </sidebar> <!-- .sidebar-menu -->
