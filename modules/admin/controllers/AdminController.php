<?php
namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\web\Session;

class AdminController extends Controller {

    public function beforeAction($action) {
        $session = \Yii::$app->session;
        $session->open();
        if (!$session->has('auth_site_admin')) {
            $this->redirect('/login');
            return false;
        }
        return parent::beforeAction($action);
    }
}