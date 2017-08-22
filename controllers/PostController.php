<?php

namespace app\controllers;

use app\models\User;
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
                                //var_dump(Comment::find()->where('post_id = ' . $model->id)->all());exit();
                $comments = $value=Comment::find()
                    ->select(['u.username as username', 'c.test as text'])
                    ->alias('c')
                    ->leftJoin(User::tableName().' u', 'c.user_id=u.id')
                    ->where('c.post_id = ' . $model->id)->asArray()->all();

            return $this->render('post', ['model'=>$model,
                                                'comments'=>$comments]);

    }
}