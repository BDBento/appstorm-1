<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--chama as funçoes responsaveis por apontar as pag de estilos css-->
    <?php wp_head() ?>

</head>


<body>
<header class="container-fluid cabecario">
            <!--logo-->
                <?php the_custom_logo();?>
               <!--menu-->


                    <?php wp_nav_menu(
                            array('theme_location' => 'header_menu','container' => ''));
                    ?>

    </header>
<main>
