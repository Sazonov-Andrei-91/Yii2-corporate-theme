<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $h1
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $content
 * @property string $url
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'h1', 'title', 'description', 'keywords', 'content', 'url'], 'required'],
            [['parent_id'], 'integer'],
            [['title', 'description', 'keywords', 'url'], 'string'],
            [['h1'], 'string', 'max' => 255],
            [['content'], 'string', 'max' => 5000],
            [['tabs_content'], 'string', 'max' => 5000],
            [['tabs_img'], 'string', 'max' => 255],
            [['index_order'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Родительская категория',
            'h1' => 'Заголовок H1',
            'title' => 'Title',
            'description' => 'Описание',
            'keywords' => 'Ключевые слова',
            'content' => 'Контент',
            'url' => 'Url',
            'tabs_content' => 'Контент для табов(только услуги, для главной страницы)',
            'tabs_img' => 'Картинка для табов(только услуги, для главной страницы)',
            'index_order' => 'последовательность пунктов в меню',
        ];
    }
}
