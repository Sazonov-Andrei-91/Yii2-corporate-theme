<?php

namespace app\models;

use yii\db\ActiveRecord;

class Mailsfile extends ActiveRecord {
    public function rules() {
        return [
            [['name', 'phone'], 'trim'],
            [['data'], 'safe'],
            [['file'], 'file'],
            ['name', 'required'],
            ['phone', 'required'],
            ['file', 'required'],
        ];
    }
}