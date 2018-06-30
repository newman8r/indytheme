<?php
get_header();
 ?>

<div class="container">
<div class="row">

<div class="col" align="center">
  <h1 class="indy front-title">The Indy</h1>
</div>
</div>

<div class="row head-info">
  <div class="col-3">
<?php
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday]";
 ?>
  </div>

<div class="col-6" align="center">
<span class="tagline">Your Uncle Phil of Grayscale News</span>
</div>

<div class="col-3 right">
<img class="top-icon" src="/wp-content/themes/indy/media/rss.png" />
</div>

</div>


<div class="row">
  <div class="col-4 r-border c1">
    <?php $query = new WP_Query( 'cat=7' ); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

  <div class="post">

  <!-- Display the Title as a link to the Post's permalink. -->
  <h2 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

  <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
  <small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>

  <div class="entry">
  <?php the_excerpt(); ?>
  </div>

  <p class="postmetadata"><?php esc_html_e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
  </div> <!-- closes the first div box -->

  <?php endwhile;
  wp_reset_postdata();
  else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</div>
      <div class="col-5 r-border c2">


        <?php $query = new WP_Query( 'cat=2' ); ?>
   <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

   <div class="post">

   <!-- Display the Title as a link to the Post's permalink. -->
   <h2 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

   <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
   <small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>

    <div class="entry">
    	<?php the_content(); ?>
    </div>

    <p class="postmetadata"><?php esc_html_e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
   </div> <!-- closes the first div box -->

   <?php endwhile;
   wp_reset_postdata();
   else : ?>
   <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
   <?php endif; ?>
 </div>





<div class="col-3">

          <?php $query = new WP_Query( 'cat=3,4,5,6,8,9,10' ); ?>
     <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

     <div class="post">

     <!-- Display the Title as a link to the Post's permalink. -->
     <h2 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

     <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
     <small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>

      <div class="entry">
      	<?php the_content(); ?>
      </div>

      <p class="postmetadata"><?php esc_html_e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
     </div> <!-- closes the first div box -->

     <?php endwhile;
     wp_reset_postdata();
     else : ?>
     <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
     <?php endif; ?>
</div>

</div>




</div>


<?php
get_footer();
 ?>
