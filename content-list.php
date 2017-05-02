<?php
/**
 * The template used for displaying index content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row" >

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$image = $image[0]; ?>
	<?php else :
	$image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
	<?php endif; ?>

		<a  href="<?php the_permalink();?>" class="image-header" style="background: url('<?php echo $image; ?>') no-repeat center center; background-size: auto 100%;">
		</a>

	<div class="col-sm-10 col-sm-offset-1 pad-xs-30 pad-sm-45 padding-bottom">
				<div class="entry-categories">
					<?php
						echo get_the_category_list();
					?>
				</div>
				<header class="entry-header text-center">
						<a class="index-header-link" href="<?php the_permalink();?>">
				<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
					</a>
				</header><!-- .entry-header -->

				<div class="entry-meta text-center pad-xs-30 padding-bottom">
				<?php the_time('F jS, Y');?>
					</div>

				<div class="entry-content">
							<?php
							if( is_single() ) {
								the_content();
							 }
							else {
								the_excerpt(); ?>
							<div class="btn-wrap">
								<a class="btn btn-success more-link bold" href="<?php the_permalink();?>">Read Full Article</a>
							</div>
							<?php } ?>
				</div><!-- .entry-content -->
			</div>
</div>
</article><!-- #post-## -->
<hr>
