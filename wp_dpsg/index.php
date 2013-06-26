<?php get_header(); ?>
		<div class="container">
			<div id="artikelbild" class="clearfix row-fluid">
				<!--<div style="width:1170px;height:200px;background:black;display:block;overflow:hidden;"></div>
				<?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'wp-dpsg-post-thumbnail-large' ); echo '<img src="' . $image_src[0] . '" width="100%" />'; ?>
				<?php
				// Check if this is a post or page, if it has a thumbnail, and if it's a big one
				if ( is_singular() &&
					has_post_thumbnail( $post->ID ) &&
					( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'wp-dpsg-post-thumbnail-large' ) ) &&
					$image[1] >= 1170/*HEADER_IMAGE_WIDTH*/ ) :
				// Houston, we have a new header image!
				echo get_the_post_thumbnail( $post->ID, 'wp-dpsg-post-thumbnail-large' );
				else : ?>
				img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
				<img src="<?php bloginfo('template_url'); ?>/images/header_default.jpg"alt="" />
			<?php endif; ?>-->
			<img src="<?php bloginfo('template_url'); ?>/images/header_default.jpg"alt="" />
		</div>
		</div>
		
		<div id="content" class="container-fluid">
			<div class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
		</div>

<?php get_footer(); ?>