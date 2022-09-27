<?php

namespace app\models;

use yii\db\ActiveRecord;

class Mails extends ActiveRecord {
    public function rules() {
        return [
            [['name', 'phone'], 'trim'],
            [['data', 'form_name', 'button_name'], 'safe'],
            ['name', 'required'],
            ['phone', 'required'],
        ];
    }

}