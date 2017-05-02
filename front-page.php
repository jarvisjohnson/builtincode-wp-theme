<?php
/**
 * Template Name: Home
 *
 */

 get_header(); ?>

         <div class="banner-bg" id="top">
             <div class="banner-overlay"></div>
             <div class="welcome-text">
                 <h2>Brooklyn eCommerce Specialists</h2>
                 <h5>Built in Code create websites and web apps in Brooklyn. We design and develop custom websites, specialising in online stores. <a href="#contact" class="contact-scroll">Talk to us</a> about how your website can drive your business.</h5>
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
                             <h1 class="widget-title">Recent Websites</h1>
                           <?php if (get_field('portfolio_text')):
                              the_field('portfolio_text');
                        endif; ?>
                         </div>
                     </div>
                     <div class="row projects-holder">
                       <?php
                                if( have_rows('projects') ):
                                    while ( have_rows('projects') ) : the_row(); ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project-item">
                                            <img src="<?php the_sub_field('image'); ?>" alt="Built in Code - Brooklyn Shopify Partners">
                                            <div class="project-hover">
                                                <div class="inside">
                                                    <h5><a href="http://<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('title'); ?></a></h5>
                                                    <p><?php the_sub_field('description'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                else : ?>
                          <?php endif; ?>
                     </div> <!-- .projects-holder -->
                     </div>
                     <hr>

                     <!-- Capabilities -->
                     <div class="page-section" id="capabilities">
                       <div class="row">
                           <div class="col-md-12">
                               <h1 class="widget-title">Technologies We Use</h1>
                             <?php if (get_field('capability_text')):
                                the_field('capability_text');
                              endif; ?>
                           </div>
                       </div>
                       <div class="row projects-holder">
                         <?php
                                  if( have_rows('technologies') ):
                                      while ( have_rows('technologies') ) : the_row(); ?>
                                      <div class="col-md-4 col-sm-6">
                                          <div class="project-item">
                                              <img src="<?php the_sub_field('image_2'); ?>" alt="Built in Code - Web site experts in Brooklyn">
                                              <div class="project-hover">
                                                  <div class="inside">
                                                      <h5><a href="http://<?php the_sub_field('url_2'); ?>" target="_blank"><?php the_sub_field('title_2'); ?></a></h5>
                                                      <p><?php the_sub_field('description_2'); ?></p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <?php endwhile;
                                  else : ?>
                            <?php endif; ?>
                       </div> <!-- .projects-holder -->
                       </div>
                       <hr>


                     <!-- CONTACT -->
                     <div class="page-section" id="contact">
                     <div class="row">
                         <div class="col-md-12">
                             <h1 class="widget-title">Hire Us</h1>
                             <p>We are currently available to take on new projects. We'd love to hear from you if you require  development work, so please get in touch below.</p>
                             <p>We work on Eastern Standard time, and are typically available from 9-5.</p><br>
                             <address class="visible-xs visible-sm">
                               <p><i class="fa fa-phone"></i>&nbsp;&nbsp;Greenpoint: <a href="tel:+13476417815">347-641-7815</a></p><br>
                               <p><i class="fa fa-envelope-o"></i><a href="mailto:hello@builtincode.com" target="_blank">&nbsp;&nbsp;hello@builtincode.com</a></p>
                             </address>
                             <address class="hidden-xs hidden-sm">
                               <p><i class="fa fa-phone-square"></i>&nbsp;&nbsp;Greenpoint: 347-641-7815</p><br>
                               <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;hello@builtincode.com</p>
                             </address>
                         </div>
                     </div>
                     <div class="row">
                     </div> <!-- .contact-form -->
                     </div>
                     <hr>

                     <!-- PRICING -->
                     <div class="page-section" id="Pricing">
                       <div class="row">
                           <div class="col-md-12">
                             <h1 class="widget-title">Web Development Price Guide</h1>
                             <p>
                               Built in Code often work with web designers on custom web projects. The price guides below reflect development work without design.  We also love to provide full package webiste solutions including web design, hosting, and SEO services. We can be hired out for hourly work on existing sites as well.  Every business's needs are different, and we are happy to bounce ideas round, so please contact us to discuss your project.
                              <p>
                           </div>
                         </div>
                        	<div class="row" style="margin-top: 40px;">
                                <div class="col-xs-12 col-sm-4">
                                  <div class="panel panel-warning text-center">
                                    <div class="panel-heading">
                                      <h2>Small Site</h2>
                                    </div>
                                    <div class="panel-body">
                                      <h3 class="panel-title price"><span class="price-month">~</span>&nbsp;$1200<span class="price-cents">&nbsp;usd</span></h3>
                                    </div>
                                    <ul class="list-group">
                                      <li class="list-group-item">Blog</li>
                                      <li class="list-group-item">Custom Theme</li>
                                      <li class="list-group-item">Landing Page</li>
                                      <li class="list-group-item">Contact Page / Form</li>
                                      <li class="list-group-item">Responsive Functionality</li>
                                      <li class="list-group-item">Site Security</li>
                                      <li class="list-group-item"><a class="btn btn-warning contact-scroll" href="#contact">Request Quote</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                  <div class="panel panel-info text-center">
                                    <div class="panel-heading">
                                      <h2>Medium Site</h2>
                                    </div>
                                    <div class="panel-body">
                                      <h3 class="panel-title price"><span class="price-month">~</span>&nbsp;$2400<span class="price-cents">&nbsp;usd</span></h3>
                                    </div>
                                    <ul class="list-group">
                                      <li class="list-group-item">Small Features plus ... </li>
                                      <li class="list-group-item">Custom Post Types</li>
                                      <li class="list-group-item">Intricate Layouts / Functionality</li>
                                      <li class="list-group-item"><a class="btn btn-info contact-scroll" href="#contact">Request Quote</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                  <div class="panel panel-success text-center">
                                    <div class="panel-heading">
                                      <h2>Large Site</h2>
                                    </div>
                                    <div class="panel-body">
                                      <h3 class="panel-title price"><span class="price-month">~</span>&nbsp;$3600<span class="price-cents">&nbsp;usd</span></h3>
                                    </div>
                                    <ul class="list-group">
                                      <li class="list-group-item">Medium Features plus ... </li>
                                      <li class="list-group-item">Custom eCommerce</li>
                                      <li class="list-group-item">Payment Functionality</li>
                                      <li class="list-group-item">CRM Integration</li>
                                      <li class="list-group-item"><a class="btn btn-success contact-scroll" href="#contact">Request Quote</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                      <div class="panel panel-default text-center">
                                        <div class="panel-heading">
                                          <h2>Ad Hoc Work</h2>
                                        </div>
                                        <div class="panel-body">
                                          <h3 class="panel-title price"><span class="price-month"></span>&nbsp;$80<span class="price-cents">&nbsp;/hr</span></h3>
                                        </div>
                                        <ul class="list-group">
                                          <li class="list-group-item">Adding Site Content</li>
                                          <li class="list-group-item">Site Uploading / Server Admin</li>
                                          <li class="list-group-item">Site Revisions</li>
                                          <li class="list-group-item">Design Work</li>
                                          <li class="list-group-item"><a class="btn btn-default contact-scroll" href="#contact">Enquire</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                     </div>
                     <hr style="margin-bottom:10px;">

<script type="text/javascript">

    $('.navigation').singlePageNav({
        currentClass : 'active',
				// offset: 300,
				updateHash: true
    });

</script>

<?php get_footer(); ?>
