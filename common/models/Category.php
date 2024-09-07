<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id_cat
 * @property string $name
 * @property string $author
 * @property string $publisher
 * @property string|null $category
 * @property string $img_path
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author', 'publisher'], 'required'],
            [['category'], 'string'],
            [['name', 'author', 'publisher', 'img_path'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cat' => 'Id Cat',
            'name' => 'Name',
            'author' => 'Author',
            'publisher' => 'Publisher',
            'category' => 'Category',
            'img_path' => 'Img Path',
        ];
    }
}
