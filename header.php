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
                    <!--padrao mantido para compatibilidade para versoes anteriores -->
                <?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} ?>
               
                    <?php wp_nav_menu(
                            array('theme_location' => 'header_menu','container' => ''));?>
                    </div>

    </header>
<main>
