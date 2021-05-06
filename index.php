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
            while(have_posts(  )):the_post(  );
                    echo 'nao tem post';
            endwhile;
        endif;
    
?>



<?php get_footer()?>