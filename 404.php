<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="banner-bg" id="top">
		<div class="banner-overlay"></div>
		<div class="welcome-text">
				<h2>404 - page not found</h2>
				<h5>Please try <a href="<?php bloginfo('url')?>">heading back to the homepage</a>.</h5>
		</div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content" id="blog-list">
		<div class="fluid-container">

				<div class="content-wrapper">

					<div class="page-section">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
						</header><!-- .page-header -->
					</section><!-- .error-404 -->

				</div>


	<script type="text/javascript">

		  $('.navigation').singlePageNav({
		      currentClass : 'active',
					// offset: 300,
					updateHash: true
		  });

	</script>



<?php get_footer(); ?>
