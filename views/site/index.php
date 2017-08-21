<?php
use yii\helpers\Html;
use app\models\Comment;
use assets\MainAsset;
/* @var $this yii\web\View */

$this->title = 'task';
?>
<div class="site-index">

    <?php if(count($model)): ?>
        <?php foreach ($model as $item): ?>
            <? //var_dump($comments);exit(); ?>
            <? //var_dump($comments);exit(); ?>
            <article class="col-lg-12">
                <div class="post_content">
                    <h3><?= Html::a($item->title, ['/post/post', 'id' => $item['id']]) . '&emsp;<i class="fa fa-external-link"></i>' ?></h3>
                    <span><?= substr($item->description, 0, 500) ?>
                        <?= Html::a("...", ['/post/post', 'id' => $item['id']]) . '&emsp;<i class="fa fa-external-link"></i>' ?>
                    </span>
                </div>
                <div class="views col-lg-6"><i class="fa fa-eye" aria-hidden="true"></i>&emsp;Просмотров: <?= $views = $item->views ? :'0' ?></div>
                <div class="comments col-lg-6"><i class="fa fa-comments-o" aria-hidden="true">Комментарии: <?= $comments[$item->id] ? :'0' ?></div>
            </article>
            <hr>
        <?php endforeach ?>
    <?php endif; ?>
</div>
