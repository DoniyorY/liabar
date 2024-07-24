<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_category".
 *
 * @property int $id
 * @property int|null $type_id
 * @property string $name_ru
 * @property string $name_en
 * @property string|null $name_uz
 */
class MenuCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_id'], 'integer'],
            [['name_ru', 'name_en'], 'required'],
            [['name_ru', 'name_en', 'name_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_id' => 'Type ID',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'name_uz' => 'Name Uz',
        ];
    }
}
