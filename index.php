<?php

 /* Template Name: Home Page */

get_header();

?>

<!-- PRODUCT GRID LAYOUT -->

<div class="row home">
  <div class="container narrow">
    <div class="product-grid">
      <?php
      // Default arguments
        $args = array(
        	'posts_per_page' => 15, // How many items to display
        	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
        "orderby"          => "post_date"
        );

        // Query posts
        $wpex_query = new wp_query( $args );

        // Loop through posts
        foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

          <?php if( get_field('product_image_1') ): ?>
          <a href="<?php the_permalink(); ?>" class="item-container">
            <div class="item-content">
              <img src="<?php the_field('product_image_1'); ?>">
            </div>
          </a>
          <?php endif; ?>

      <?php
      endforeach;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<!-- END PRODUCT GRID LAYOUT -->

<!-- CENTER TEXT -->

<div class="row">
  <div class="container narrow center">
    <h2>De-Cluttering the Internet.</h2>
  </div>
</div>

<!-- END CENTER TEXT -->

<?php

get_footer();

?>
