<?php get_header(); ?>


<div id="main-container">
     <section id="content-container">
     <?php
          // Start the loop
          if ( have_posts() ) : while ( have_posts() > : the_post();
          // Get the correct content type
          get_template_part( 'content', get_post_format() );
          
          // Load comments if singular
          if ( is_singular() ) {
               comments_template( '', true );
          }
          // Loop ends
          endwhile
          
          // Nothing in the loop:
          else :
     ?>
          <article id="post-0" class="post no-results not-found">
               <header>
                    <h2 class="entry-title">Nothing Found</h2>
               </header>
               <p>We're sorry, but we couldn't find anything for you.  Please try and search for whatever it was you were looking for.</p>
               <?php get_search_form(); ?>
          </article>
     </section> <!-- #main-container ends -->
     
     
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>