<?php
namespace app\components;

use yii\base\Widget;
use app\models\Pages;

class HomeTabsWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $pages = Pages::find()->where(['parent_id' => '7'])->select('id, parent_id, h1, url, tabs_content, tabs_img')->indexBy('id')->asArray()->all();
        return $this->render('hometabs', compact('pages'));
    }
}