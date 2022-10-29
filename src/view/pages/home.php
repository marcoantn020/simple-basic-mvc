<?php include("./src/view/pages/estrutura/header.php") ?>


<?php foreach (\App\model\PostsModel::selectAll() as $key => $value) { ?>
    
<div class="single-post">
    <h3><?=$value->name?></h3>
    <span><?=$value->textPost?></span>
</div><!-- single-post -->

<?php }?>







