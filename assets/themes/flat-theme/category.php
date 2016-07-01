
<?php get_header();

$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-8';
}

//get_template_part( 'sub', 'title' );

?>

<div class="row">
  <div id="content" class="site-content col-md-8" role="main">
    <?php $counter = 1; ?>

    <?php if ( have_posts() ) : $totalpost = count(get_posts()); while ( have_posts() ) : the_post(); ?>

      <?php
        if($counter == 1 ) : $class = 'col-xs-12 box-primary';
        else : $class = 'col-sm-4';
        endif;
      ?>

      <?php	if($counter == 1 || $counter == 2) : ?>
      <div class="row">
      <?php endif; ?>

        <a class="box <?php echo $class; ?>" href="<?php the_permalink(); ?>">
          <?php $img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>
          <?php $imgurl = !empty($img) ? $img : catch_that_image(); ?>
          <div class="thumbnail" <?php echo 'style="background-image: url('.$imgurl.')"'; ?>>
          </div>
          <?php if($counter == 1) : ?>
            <div class="news-content">
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
            </div>
          <?php else : ?>
          <div class="news-title">
            <?php echo substr(get_the_title(),0,60)."..."; ?>
          </div><!-- /.news-title -->
          <?php endif; ?>
        </a><!-- /.box -->

      <?php	if($counter == 1) : ?>
      </div><!-- /.row -->
      <?php endif; ?>

    <?php $counter++; ?>
    <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div><!-- #content -->
  <?php get_sidebar(); ?>
</div><!-- /.row -->
<?php get_footer(); ?>
