<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/view/pages/assets/css/style.css">
    <title>Login </title>
</head>
<body>
<div class="sidebar"></div>
<div class="container">
    <form method="post">
        <input type="text" name="email" placeholder="Seu login...">
        <input type="password" name="pass" placeholder="Sua senha ...">
        <input type="submit" name="action" value="Login">
        <input type="hidden" name="login">
        <a href="<?=PATH_URL?>register">Criar conta</a>
    </form>
</div><!-- form-->

<?php include("./src/view/pages/estrutura/footer.php") ?>
