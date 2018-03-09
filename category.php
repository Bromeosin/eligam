<?php

 /* Template Name: Category Page */

get_header();

?>

<?php if( get_field('category_title') ): ?>
  <?php if( get_field('category_title_image') ): ?>
    <div class="row category flex" style="background-image:url('<?php the_field('category_title_image'); ?>'); background-position-y: 50%;">
  <?php endif; ?>
    <div class="category-container">
      <h1><?php the_field('category_title'); ?></h1>
    </div>
  </div>
<?php endif; ?>


<!-- SORT BY BAR -->

<div class="row light sort-by">
  <div class="container narrow">
    <div class="trust-text">
      <p>25% of profits direct to charity.</p>
    </div>
      <div class="sort-by-list">
        <div class="dropdown">
              <div onclick="sortDrop()" class="dropbtn sort">
                sort by
                <div id="arrowSort" class="arrow arrowSort"><img src="http://eligam.co/wp-content/themes/eligam/assets/images/down-arrow.png" /></div>
              </div>
              <div id="sort" class="dropdown-content">
                <a href="#">latest</a>
                <a href="#">price ascending</a>
                <a href="#">price decending</a>
              </div>
        </div>
      </div>
  </div>
</div>


<!-- END SORT BY BAR -->

<!-- PRODUCT GRID LAYOUT -->

<div class="row grid">
  <div class="container narrow">
    <div class="product-grid">

      <?php

      global $post; // required
      $args = array(
        'category_name' => get_the_title(),
        'posts_per_page' => 25,
        "orderby"          => "post_date",
         ); // exclude category 9
      $custom_posts = get_posts($args);
      foreach($custom_posts as $post) : setup_postdata($post); ?>

      <?php if( get_field('product_image_1') ): ?>
      <a href="<?php the_permalink(); ?>" class="item-container">
        <div class="item-content">
          <img src="<?php the_field('product_image_1'); ?>">
        </div>
      </a>
      <?php endif; ?>

      <?php endforeach; ?>

   </div>
 </div>
</div>

<!-- END PRODUCT GRID LAYOUT -->

<!-- PAGINATION -->

<div class="row light sort-by">
  <div class="container narrow">
    <div class="previous-page">
      <a href="#">< previous page</a>
    </div>
    <div class="next-page">
      <a href="#">next page ></a>
    </div>
  </div>
</div>


<!-- END PAGINATION -->

<!-- INTRODUCTION -->

  <div class="row introduction">
    <div class="container narrow flex">
      <div class="eight columns">
        <?php if( get_field('category_SEO_title') ): ?>
          <h1><?php the_field('category_SEO_title'); ?></h1>
        <?php endif; ?>
        <?php if( get_field('category_seo_copy') ): ?>
          <p><?php the_field('category_seo_copy'); ?></p>
        <?php endif; ?>
      </div>
      <?php if( get_field('category_seo_image') ): ?>
        <div class="four columns introduction-image" style="background-image: url(<?php the_field('category_seo_image');  ?>);"></div>
      <?php endif; ?>
    </div>
  </div>

<!-- END INTRODUCTION -->

<?php

get_footer();

?>
