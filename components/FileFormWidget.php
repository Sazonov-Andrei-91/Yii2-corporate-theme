<?php
namespace app\components;

use yii\base\Widget;
use app\models\Mailsfile;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

class FileFormWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $form_model =  new Mailsfile;
        if ($form_model->load(\Yii::$app->request->post())) {
            $form_model->file = UploadedFile::getInstance($form_model, 'file');
            $path = \Yii::getAlias('@webroot') . '/tester' . '/' . date('d.m.o H.i.s');
            FileHelper::createDirectory($path);
            $form_model->file->saveAs($path . '/' .$form_model->file);
            $form_model->save();
        }
            
        return $this->render('fileform', compact('form_model'));
    }
}