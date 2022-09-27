<?php
namespace app\components;

use yii\base\Widget;
use app\models\Mails;

class ModalFormWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $form_model =  new Mails;
        if ($form_model->load(\Yii::$app->request->post())) 
            $form_model->save();
        return $this->render('modalform', compact('form_model'));
    }
}