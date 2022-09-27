<?php 
    use yii\helpers\Url; 
?>
<section class="breadcrumbs">
    <div class="container">
        <a href="<?=Url::home()?>">Главная</a> > <span><?= $pages->h1; ?></span>
    </div>
</section>

<section class="page">
    <div class="container">
        <h2><?= $pages->h1; ?></h2>
        <div><?= $pages->content; ?></div>
    </div>
</section>
