<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "mails".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $data
 * @property string|null $form_name
 * @property string|null $button_name
 */
class Mails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'data', 'form_name', 'button_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя клиента',
            'phone' => 'Телефон клиента',
            'data' => 'Дата отправки',
            'form_name' => 'Имя формы',
            'button_name' => 'Откуда форма',
        ];
    }
}
