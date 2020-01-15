<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <?php wp_head(); ?>
</head>
<body>
<?php
    if ( is_front_page() && is_home() ) :
        get_template_part('template-parts/template-headers/header_2/header_home');
    else :
        get_template_part('template-parts/template-headers/header_2/header_else');
    endif;
?>
