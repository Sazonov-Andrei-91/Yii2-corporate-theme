<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "mailsfile".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $file
 * @property string|null $data
 */
class Mailsfile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mailsfile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'data'], 'string', 'max' => 255],
            [['file'], 'string', 'max' => 2550],
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
            'file' => 'Файл',
            'data' => 'Дата',
        ];
    }
}
