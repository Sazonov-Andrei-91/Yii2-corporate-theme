<?php
namespace app\components;

use yii\base\Widget;
use app\models\Pages;

class FooterMenuWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $pages = Pages::find()->select('id, parent_id, h1, url')->indexBy('id')->asArray()->all();
        return $this->render('footermenu', compact('pages'));
    }
}