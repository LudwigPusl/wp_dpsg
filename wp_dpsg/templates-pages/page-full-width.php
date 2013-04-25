<?php
/**
 * Template Name: Page - Full-width
 * Description: Displays a page title and content without displaying a sidebar.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
          <div class="span12">
             <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
         </div><!--/.span12 -->
   </div><!--/.row -->


      <header class="jumbotron subhead" id="overview">
        <h1><?php the_title();?></h1>
      </header>

				<div class="row content">
				  <?php the_content();?>
				<?php endwhile; // end of the loop. ?>

				</div><!-- .row content -->


<?php get_footer(); ?>