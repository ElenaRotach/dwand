<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'task';
?>
<div class="site-index">

    <?php if(count($model)): ?>
        <?php foreach ($model as $item): ?>
            <article class="col-lg-12">
                <h3><?= Html::a($item->title, ['/post/post', 'id' => $item['id']]) . '&emsp;<i class="fa fa-external-link"></i>' ?></h3>
                <span><?= substr($item->description, 0, 500) ?>
                    <?= Html::a("...", ['/post/post', 'id' => $item['id']]) . '&emsp;<i class="fa fa-external-link"></i>' ?>
                </span>
                <div class="col-lg-6">Просмотров: <?= $views = $item->views ? :'0' ?></div>
                <div class="col-lg-6">Комментарии: </div>
            </article>
        <?php endforeach ?>
    <?php endif; ?>
</div>