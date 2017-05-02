<?php
/**
 * Template Name: Home
 *
 */

 get_header(); ?>

         <div class="banner-bg" id="top">
             <div class="banner-overlay"></div>
             <div class="welcome-text">
                 <h2>NYC Web Application Development</h2>
                 <h5>Built in Code develop websites and web applications in Brooklyn. We develop custom websites and enterprise applications, including online stores. <a href="#Message" class="contact-scroll">Talk to us</a> about building the right application for your business needs.</h5>
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
                             <h1 class="widget-title">Recent projects</h1>
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
                               <h1 class="widget-title">Some tech we use</h1>
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


                     <!-- hiring -->
                     <div class="page-section" id="hire">
                     <div class="row">
                         <div class="col-md-12">
                             <h1 class="widget-title">Hire us</h1>
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

                     <!-- Message Us -->
                     <div class="page-section" id="Message">
                       <div class="row">
                           <div class="col-md-12">
                             <h1 class="widget-title">Send us a message</h1>
                             <p>
                               Built in Code often work with web designers on custom web projects and apps. The price guides below reflect development work without design.  We also love to provide full package webiste solutions including web design, hosting, and SEO services. We can be hired out for hourly work on existing applications as well.  Every business's needs are different, and we are happy to bounce ideas round, so please contact us to discuss your project.
                              <p>
                           </div>
                         </div>
                         <br>
                         <hr>
                         <br>
                       <div class="row">
                           <div class="col-md-12">
                            <?php echo do_shortcode("[contact-form-7 id='315' title='Primary']");?>
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
