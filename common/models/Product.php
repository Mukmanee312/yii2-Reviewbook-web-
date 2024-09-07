<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id_pro
 * @property string $name
 * @property string $author
 * @property string $publisher
 * @property string|null $category
 * @property float $price
 * @property string $detail
 * @property string $review
 * @property string $img_path
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author', 'publisher', 'price', 'detail', 'review'], 'required'],
            [['category', 'detail', 'review'], 'string'],
            [['price'], 'number'],
            [['name', 'author', 'publisher', 'img_path'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pro' => 'Id Pro',
            'name' => 'Name',
            'author' => 'Author',
            'publisher' => 'Publisher',
            'category' => 'Category',
            'price' => 'Price',
            'detail' => 'Detail',
            'review' => 'Review',
            'img_path' => 'Img Path',
        ];
    }
}
