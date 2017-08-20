<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Post;
use Yii;

class PostController extends Controller{

    public function actionIndex()
    {
        $model = Post::find()->all();

        return $this->render('index', ['model'=>$model]);
    }

    public  function  actionPost($id){

            $model = Post::findOne($id);
            $model->views++;
            $model->save();
            return $this->render('post', ['model'=>$model]);

    }
}