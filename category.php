<?php
get_header()
?>

<div class="container cats">
<div class="row">

<div class="col-9">

<?php
// Start the loop.
while ( have_posts() ) : the_post();

?>

<div class="category-item">

<h2 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div class="content">
  <?php the_content() ?>
</div>

</div>

<?php

endwhile;
?>


</div>
</div>
</div>



<?php
get_footer()
?>
