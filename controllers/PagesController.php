<?php

namespace app\controllers;

use app\models\Pages;

class PagesController extends AppController {


    public function actionIndex($url) {
        $pages = Pages::findOne(['url' => $url]);

        \Yii::$app->view->title = $pages->title;
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $pages->description]);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $pages->keywords]);
        // $this->registerLinkTag(['rel' => 'canonical', 'href' => 'канонический урл']);
        if($pages) {
            return $this->render('index', compact('pages'));
        }
        else {
            throw new \yii\web\NotFoundHttpException('404');
        }
    }
}