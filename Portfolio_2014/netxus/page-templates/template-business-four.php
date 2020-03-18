<?php
/**
 * Template Name: Business Template Four
 *
 * Displays the Business Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Ample Pro
 * @since Ample 1.0
 */
?>

<?php get_header();

   do_action( 'ample_before_body_content' ); ?>

   <?php
      if( is_active_sidebar( 'ample_business_sidebar_four' ) ) {
         // Calling the Business Sidebar if it exists.
         if ( !dynamic_sidebar( 'ample_business_sidebar_four' ) ):
         endif;
      }
   ?>
   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>