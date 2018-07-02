<?php
get_header();
?>

<div class="topline">

</div>
<div class="container">
  <div class="row">
    <div class="col-9">


<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>
<div class="post-single">
  <div class="post-category">
    <?php the_category( ', ' );?>
  </div>
  <div class="title headline">
    <h1><?php the_title() ?></h1>
    <span class="pubdate">Published <?php the_time( 'F jS, Y' ); ?></span>
  </div>
  <div class="content">
    <?php the_content() ?>
  </div>
</div>

<?php
endwhile;
?>
<div id="article-bottom" class="sidebar">
  <?php dynamic_sidebar( 'article-bottom' ); ?>
</div>
    </div>
    <div class="col-3">
      <div id="article-side" class="sidebar">
        <?php dynamic_sidebar( 'article-side' ); ?>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>
