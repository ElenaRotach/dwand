<?php

$this->title = $model->title;
?>
<script>
    function goComment(obj, post_id, user_id) {
        var text = $(obj).parent().children('input').val();
        if(text!="") {
            $.ajax({
                url: '/admin/comment/create',
                type: 'POST',
                data: {
                    'post_id': post_id,
                    'user_id': user_id,
                    'test': text
                },
                success: function (data) {
                    //переадрессация
                    //console.log(data);
                },
                error: function () {
                    console.log('Внутренняя ошибка сервера');
                }
            });
        }else{
            return false;
        }
    }
</script>
<div class="site-index">
    <H1><?= $model->title ?></H1>
    
    <span><?= $model->description ?></span>
</div>
<div id="add_new_comment">
    <input type="text" id="text_comment">
    <a class="btn btn-default" onclick="goComment(this, <?= $model->id ?>, <?= Yii::$app->user->id ?>)">Отправить</a>
</div>
<div>
    <?php if(count($comments)>0):?>
        <?php foreach ($comments as $item):?>
            <? var_dump(count($comments)); exit();?>
            <div><?=""?></div>
        <?php endforeach ?>
    <?php endif;?>
</div>


