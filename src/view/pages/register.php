<?php include("./src/view/pages/estrutura/header.php") ?>

<div class="sidebar"></div>
<div class="container">
    <form method="post">
        <h3>Crie sua conta</h3>
        <input type="text" name="name" placeholder="Seu nome..."> 
        <input type="text" name="email" placeholder="Seu email...">
        <input type="password" name="pass" placeholder="Sua senha ...">
        <input type="submit" name="action" value="Criar conta">
        <input type="hidden" name="register" value="register">
    </form>
</div><!-- form-->

<?php include("./src/view/pages/estrutura/footer.php") ?>