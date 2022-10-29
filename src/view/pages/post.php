<?php include("./src/view/pages/estrutura/header.php") ?>

<div class="container-new-post">
    <form method="post">
        <h3>Novo Post</h3>
        <input type="text" name="name" placeholder="Titulo da postagem....">

        <textarea name="post" placeholder="digite seu post....."></textarea>

        <input type="submit" name="action" value="Criar">
        <input type="hidden" name="register-post">
    </form>
</div><!-- form-->

<?php include("./src/view/pages/estrutura/footer.php") ?>
