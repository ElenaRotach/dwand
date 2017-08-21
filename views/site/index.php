<?php
use yii\helpers\Html;
use app\models\Comment;
use app\assets\MainAsset;
MainAsset::register($this);
/* @var $this yii\web\View */
$this->title = 'task';
?>
<div class="site-index">
    <?php if(count($model)): ?>
        <?php foreach ($model as $item): ?>

            <article class="col-lg-12">
                <div class="post_content">
                    <h3><?= Html::a($item['title'] . '&emsp;<i class="fa fa-external-link"></i>', ['/post/post', 'id' => $item['id']])  ?></h3>
                    <span><?= substr($item['description'], 0, 500) ?>
                        <?= Html::a("...", ['/post/post', 'id' => $item['id']]) ?>
                </div>
                <div class="views col-lg-6"><i class="fa fa-eye" aria-hidden="true"></i>&emsp;Просмотров: <?= $item['views'] ? :'0' ?></div>
                <div class="comments col-lg-6"><i class="fa fa-comments-o" aria-hidden="true"></i>&emsp;Комментарии: <?= $item['comments'] ? :'0' ?></div>
            </article>
            <hr>
        <?php endforeach ?>
    <?php endif; ?>
</div>

