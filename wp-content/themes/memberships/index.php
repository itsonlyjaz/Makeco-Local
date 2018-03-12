<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<div class="container">

  <div class="row">

    <div class="col-sm-12">

      <?php

        //if this was a search we display a page header with the results count. If there were no results we display the search form.
        if (is_search()) :

          $total_results = $wp_query->found_posts;

          echo "<h2 class='page-header'>" . sprintf( __('%s Search Results for "%s"','devdmbootstrap3'),  $total_results, get_search_query() ) . "</h2>";

          if ($total_results == 0) :
            get_search_form(true);
          endif;

        endif;

        if ( have_posts() ) : while ( have_posts() ) : the_post();

            // single post
            if ( is_single() ) : ?>

              <div <?php post_class(); ?>>

                <h1 class="page-header"><?php the_title() ;?></h1>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                <?php get_template_part('template-part', 'postmeta'); ?>

              </div>

            <?php
            // list of posts
            else : ?>

              <div <?php post_class(); ?>>

                <h1 class="page-header"><?php the_title() ;?></h1>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                <?php get_template_part('template-part', 'postmeta'); ?>

              </div>

             <?php  endif; ?>

        <?php endwhile; ?>
        <?php posts_nav_link(); ?>
        <?php else: ?>

          <?php get_404_template(); ?>

      <?php endif; ?>

    </div>

  </div><!-- end .row -->

</div><!-- .container -->

<?php get_footer(); ?>
