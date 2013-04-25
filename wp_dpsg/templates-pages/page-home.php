<?php
/**
 * Template Name: Page - Home Hero
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 */
get_header(); ?>

    <div class="container">
     <div class="hero-unit">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title();?></h1>
      <?php the_content();?>
      </div><!--/.hero-unit -->


<?php endwhile; endif; ?>
  <div class="row">
    <div class="span4">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-left" );
?>
    </div>
    <div class="span4">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-middle" );
?>
    </div>
    <div class="span4">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-right" );
?>
    </div>
</div>
<?php get_footer();?>
