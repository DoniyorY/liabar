<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $title_ru
 * @property string $title_en
 * @property string|null $title_uz
 * @property string $short_ru
 * @property string $short_en
 * @property string|null $short_uz
 * @property int $price
 * @property int $created
 * @property int $status
 * @property string $country_ru
 * @property string $country_en
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'price', 'created', 'status'], 'integer'],
            [['title_ru', 'title_en', 'short_ru', 'short_en', 'price', 'created', 'status', 'country'], 'required'],
            [['title_ru', 'title_en', 'title_uz', 'short_ru', 'short_en', 'short_uz', 'country_ru','country_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'title_uz' => 'Title Uz',
            'short_ru' => 'Short Ru',
            'short_en' => 'Short En',
            'short_uz' => 'Short Uz',
            'price' => 'Price',
            'created' => 'Created',
            'status' => 'Status',
            'country_ru' => 'Country Ru',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(MenuCategory::className(), ['id' => 'category_id']);
    }
}
