<?php
/*
Template Name: Sitemap
*/

get_header();
?>

<section id="content" class="page-<?php the_ID(); ?> page sitemap">
    <div class="wrapper">
        <?php get_sidebar(); ?>

        <div class='static-page' id="post-<?php the_ID(); ?>">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h2 class="title">Sitemap</h2>
        <div class='text'>
          <ul>
            <?php
              // Add pages you'd like to exclude in the exclude here
              wp_list_pages( 
                array(
                  'exclude' => '',
                  'title_li' => '',
                )
              );
            ?>
          </ul>
      </div>
    <?php endwhile; endif; ?>

    </div><!-- static-page -->

        </div> <!-- wrapper -->
  </section> <!-- content -->
<?php get_footer(); ?>
