<?php
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\models\Admin;

class AuthController extends Controller {

    public function actionLogin() {
        $model = new Admin();
        /*
         * Если пришли post-данные, загружаем их в модель...
         */
        if ($model->load(Yii::$app->request->post())) {
            // ...и проверяем эти данные
            if ($model->validate()) {
                // данные корректные, пробуем авторизовать
                if ($model->email == 'admin@mail.ru' && $model->password == 'qwerty123456') {
                    Admin::login();
                    return $this->redirect('/admin');
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('login', ['model' => $model]);;
    }

    public function actionLogout() {
        Admin::logout();
        return $this->redirect('/login');
    }
}