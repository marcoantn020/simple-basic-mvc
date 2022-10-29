<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/view/pages/assets/css/home.css">
    <link rel="stylesheet" href="./src/view/pages/assets/css/post.css">
    <title>Bem vindo <?php echo $_SESSION["name"]; ?></title>
</head>
<body>
    <section class="container">
        <div class="sidebar">
            <h1 class="logo">Minha-Logo</h1>
            <br>
            <div class="menu-sidebar">
                <h4>Menu</h4>
                <br>
                <a href="home">Home</a>
                <a href="post">Novo post</a>
                <a href="<?php echo PATH_URL?>?loggout">Sair</a>
            </div>
        </div><!-- sidebar -->

        <div class="main">