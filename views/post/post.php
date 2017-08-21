<?php
use app\assets\PostAsset;
PostAsset::register($this);
$this->title = $model->title;
?>
<div class="post_detail light-primary-color">
    <H1 class ="primary-text-color"><?= $model->title ?></H1>

    <span><?= $model->description ?></span>
</div>

<div id="add_new_comment" class="col-lg-12">
    <h4>Введите Ваш комментарий</h4>
    <textarea id="text_comment" class="col-lg-12 col-md-12 col-xs-12"></textarea>
    <a class="go_btn" onclick="goComment(this, <?= $model->id ?>, <?= Yii::$app->user->id ?>)">Отправить</a>
</div>

<div class="comments_blok col-lg-12 col-xs-12">
    <?php if(count($comments)>0):?>
        <?php foreach ($comments as $item):?>
            <div><?=""?></div>
            <div class="comment dark-primary-color">
                <div class="author">
                    <div class="avatar"><img class="avatar_img" src="./img/1.jpg"></div>
                    <div class="author_name text-primary-color">Дэн Симмонс</div>
                </div>
                <div class="comment_text light-primary-color">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis mi lacus, et porttitor metus vehicula id. Nullam vitae augue lobortis, consequat quam ac, dapibus eros. Nunc eleifend, lorem placerat cursus ultricies, tellus libero varius ante, eget porta eros mauris ut mi. Suspendisse condimentum egestas erat, consequat tempus dolor vehicula et. Aenean ut neque in risus condimentum semper in nec nibh. Curabitur lorem felis, dignissim sed tincidunt et, vehicula non felis. Suspendisse faucibus placerat egestas. Cras consequat viverra mauris, ut lacinia mi facilisis a. Quisque iaculis orci eu tincidunt mollis. Morbi et volutpat felis. Aliquam lacinia congue nibh, eu ultricies lectus consequat ac. Quisque sed auctor orci, a venenatis mauris. Praesent nec convallis orci, facilisis ultrices nisl. Sed condimentum vehicula consequat.</span>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif;?>
</div>



