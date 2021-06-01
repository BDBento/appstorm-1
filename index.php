<?php get_header()?>


<!--para chamar a versao(wp) e nome da pg -->
<?php 
    bloginfo( 'name' ); 
    echo '</br>';
    bloginfo( 'version' );
    echo '</br></br>';
?>


<!---------------------------------------------------------------teste 1 loop------------------------------------------------------------->
<div class="conttender">
        <?php 
        // exemplo argumento que define tres posts por pg. 
        $args = array( 'posts_per_page' => 2, 'post_type' => 'post',); //argumentos da consulta 
        
        // Variável para chamar WP_Query. 
        $the_query = new WP_Query( $args ); 
        
        if ( $the_query->have_posts() ) : 
            // começo do Loop 
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
            
                the_title('<h2>','</h2></br>' ); 
                the_excerpt('<h3>','</h3></br>');


                previous_post_link();
                    echo '</br>';
                next_post_link();
                    echo '</br>'; 
            // fim do Loop 
            endwhile; 
        else: 
        // Se nenhuma postagem corresponder a esta consulta, envie este texto. 
            _e( 'Desculpe, nenhum post corresponde aos seus critérios.', 'textdomain' ); 
        endif; 
        
        wp_reset_postdata(); 
        ?>

</div>

<?php
 
$args = array(
    'category_name' => 'news',
    'order' => 'ASC',
    'orderby' => 'post_title',
    'posts_per_page' => -1
);
 
// Return an array of all posts in the "news" category.
$all_posts_list = get_posts( $args );
 
?>

<?php get_footer()?>

