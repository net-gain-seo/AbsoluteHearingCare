    <?php
        get_header();
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
                     echo '<h1>Blog</h1>';
                     echo '<p>Our Latest News</p>';
                  echo '</div>';
                echo '</div>';
            echo '</div>'; // End of page-mast container
      ?>
   <article class="page-content">
     <div class="container">
       <div class="row">
         <div class="col col-lg-9 col-md-12 col-sm-12 col-xsm-12">

              <?php while ( have_posts() ) : the_post(); ?>

                <div id="Post" class="blogposts">
                  <h2 class="post-title">
                      <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <?php the_excerpt(); ?>
                </div>

              <?php endwhile; // End of the loop. ?>

          </div>
          <div class="col col-12 col-lg-3 col-md-12 col-sm-12 col-xsm-12">

              <div class="blog-sidebar">
                  <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
              </div>

          </div>
        </div>
      </div>
    </article>

    <?php
        get_footer();
