<?php
/**
 * The main template file
 *
 */

get_header(); ?>

<div class="banner-bg" id="top">
		<div class="banner-overlay"></div>
		<div class="welcome-text">
				<h2>Articles
					<?php if ( is_category() ) :
					echo ' in : ';
					single_cat_title();
				endif;
				?>
			</h2>
				<h5>a place for notes from our journey as web developers / thoughts on web trends and technologies / helpful tools we come across and use / our workflows and plans</h5>
		</div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content" id="blog-list">
		<div class="fluid-container">

				<div class="content-wrapper">


							<?php if ( have_posts() ) : ?>

								<?php
								// Start the loop.
								while ( have_posts() ) : the_post();

									get_template_part( 'content', 'list' );

								// End the loop.
								endwhile;

								echo '<article><div class="row"><div class="col-sm-10 col-sm-offset-1 pad-xs-30 pad-sm-45 padding-bottom">';
								echo '<p>If you enjoyed our blog, <a href="mailto:hello@swish.online" target="_blank">let us know</a>!</p>';
								// Previous/next page navigation.
								the_posts_pagination( array(
									'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
									'next_text'          => __( 'Next page', 'twentyfifteen' ),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
								) );

								echo '</div></div></article><hr>';

							// If no content, include the "No posts found" template.
							else :
								get_template_part( 'content', 'none' );

							endif;
							?>



	<script type="text/javascript">

		  $('.navigation').singlePageNav({
		      currentClass : 'active',
					// offset: 300,
					updateHash: true
		  });

	</script>

<?php get_footer(); ?>
