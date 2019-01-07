<?php
    get_header();
?>
<?php
    $postId = get_the_post_id();
?>
<?php
        echo '<div class="mast page-mast">';
        echo '<img src="http://209.126.119.193/~ontarioabsoluteh/wp-content/uploads/2018/10/LargeSubpageBackground.jpg" width="100%" class="mainsubpagebackground" />';
        echo '<img src="http://209.126.119.193/~ontarioabsoluteh/wp-content/uploads/2018/10/NodeOverlay.png" width="1140" class="nodebackground" />';

      $mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
      $mast_description = get_post_meta( get_the_ID(), 'mast_description', true );

              echo '<div class="container mast-overlay">';
              echo '<img width="613" height="394" src="http://209.126.119.193/~ontarioabsoluteh/wp-content/uploads/2018/10/HearingLoss-FImage.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">';
              echo '</div>'; // End of mast-overlay container
            echo '<div class="descriptionbanner">';
              echo '<div class="container">';
									 echo '<h1>'; the_title(); echo '</h1>';
                 echo '<p>Our Latest News</p>';
              echo '</div>';
            echo '</div>';
        echo '</div>'; // End of page-mast container
  ?>
<div class="container blog-content">
    <div class="row">
        <div class="col col-12 col-lg-9">
            <?php while ( have_posts() ) : the_post(); ?>

                <article>
                    <div class="blog-title">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <div class="blog-article">
                        <?php the_content(); ?>
                    </div>
                </article>

            <?php endwhile; // End of the loop. ?>

            <div class="next-prev">
                <div class="prev"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> <span>%title</span>', FALSE); ?></div>
                <div class="next"><?php next_post_link('%link', '<span>%title</span> <i class="fa fa-angle-double-right"></i>', FALSE); ?></div>
            </div>
        </div>

        <div class="col col-12 col-lg-3">

            <div class="blog-sidebar">
                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>

        </div>
    </div>

</div>

<?php
    get_footer();
