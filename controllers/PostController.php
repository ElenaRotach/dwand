<?php

namespace app\controllers;

use yii\helpers\Json;
use yii\web\Controller;
use app\models\Post;
use Yii;
use app\models\Comment;

class PostController extends Controller{

    public function actionIndex()
    {
        $model = Post::find()->all();

        return $this->render('index', ['model'=>$model]);
    }

    public  function  actionPost($id){
            $comments = [];
            $model = Post::findOne($id);
            $model->views++;
            $model->save();
                //                var_dump(Comment::find()->where('post_id = ' . $item->id)->all());exit();
                $comments[$model->id]= $value=Comment::find()->where('post_id = ' . $model->id)->all();

            return $this->render('post', ['model'=>$model,
                                                'comments'=>$comments]);

    }
}