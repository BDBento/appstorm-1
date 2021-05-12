<?php get_header()?>


<!--para chamar a versao(wp) e nome da pg -->
<?php 
    bloginfo( 'name' ); 
    echo '</br>';
    bloginfo( 'version' );
    echo '</br>';
?>
<!--para chamar pousts caso tenha -->

<?php if(have_posts(  )):
            while(have_posts( )):the_post(  );
            endwhile;
        endif;
        echo 'nao tem post';
?>


<!---------------------------------------------------------------teste 1 loop------------------------------------------------------------->


<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h2>', '</h2>' ); 
        the_post_thumbnail(); 
        the_excerpt();
    endwhile; 
else: 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
?>
<!---------------------------------------------------------------teste 2 loop------------------------------------------------------------->
<?php 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h1>', '</h1>' ); 
        the_content();
    endwhile; 
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 
?>
<!---------------------------------------------------------------teste 3 loop------------------------------------------------------------->
<?php
// Start the Loop.
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        /* * See if the current post is in category 3.
          * If it is, the div is given the CSS class "post-category-three".
          * Otherwise, the div is given the CSS class "post".
        */
        if ( in_category( 3 ) ) : ?>
        <div class="post-category-three">
        <?php else : ?>
        <div class="post">
        <?php endif; 
 
            // Display the post's title.
            the_title( '<h2>', ';</h2>' ); 
 
            // Display a link to other posts by this posts author.
            printf( __( 'Posted by %s', 'textdomain' ), get_the_author_posts_link() );
 
            // Display the post's content in a div.
            ?>
            <div class="entry">
                <?php the_content() ?>
             </div>
     
            <?php
            // Display a comma separated list of the post's categories.
            _e( 'Posted in ', 'textdomain' ); the_category( ', ' ); 
 
        // closes the first div box with the class of "post" or "post-cat-three"
       ?>
       </div>
 
    <?php 
    // Stop the Loop, but allow for a "if not posts" situation
    endwhile; 
 
else :
    /*
      * The very first "if" tested to see if there were any posts to
      * display. This "else" part tells what do if there weren't any.
     */
     _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
  
// Completely stop the Loop.
 endif;
?>
<!---------------------------------------------------------------teste 4------------------------------------------------------------->

<?php 
// Example argument that defines three posts per page. 
$args = array( 'posts_per_page' => 3 ); 
 
// Variable to call WP_Query. 
$the_query = new WP_Query( $args ); 
 
if ( $the_query->have_posts() ) : 
    // Start the Loop 
    while ( $the_query->have_posts() ) : $the_query->the_post(); 
        the_title(); 
        the_excerpt(); 
    // End the Loop 
    endwhile; 
else: 
// If no posts match this query, output this text. 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
 
wp_reset_postdata(); 
?>


<!---------------------------------------------------------------fim teste------------------------------------------------------------->

<?php get_footer()?>