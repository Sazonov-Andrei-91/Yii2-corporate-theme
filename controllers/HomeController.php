<?php

namespace app\controllers;

class HomeController extends AppController {


    public function actionIndex() {
            
        \Yii::$app->view->title = 'Компания Управленческие системы';
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => 'Компания Управленческие системы']);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => 'Компания Управленческие системы']);

        return $this->render('index', compact('form_model'));
    }
}