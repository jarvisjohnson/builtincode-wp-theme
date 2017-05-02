<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>

<div class="banner-bg" id="single-top">
		<div class="banner-overlay"></div>
		<div class="welcome-text">
			<h2>Article : 
				<?php
				echo the_title();
			?>
		</h2>
				<h5>Some notes from our journey as web developers. Thoughts on web trends and technologies. Helpful tools we come across and use. Our workflows and plans.</h5>
		</div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content" id="blog-list">
		<div class="fluid-container">

				<div class="content-wrapper">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'list' );

				?><article><div class="row"><div class="col-sm-10 col-sm-offset-1 pad-xs-30 pad-sm-45 padding-bottom">
					<p>If you enjoyed this post, <a href="mailto:hello@swish.online" target="_blank">let us know</a>!</p>
					<?php

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( ' post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( ' post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
		// End the loop.
		endwhile;
		?>
	</div>
</div>
</article>
<hr>
	<script type="text/javascript">

	    $('.navigation').singlePageNav({
	        currentClass : 'active',
					// offset: 300,
					updateHash: true
	    });

	</script>

<?php get_footer(); ?>
