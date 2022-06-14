<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bt_category".
 *
 * @property int $id_category
 * @property string $category_name
 * @property int $status
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bt_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name', 'status'], 'required'],
            [['status'], 'integer'],
            [['category_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_category' => 'Id Category',
            'category_name' => 'Category Name',
            'status' => 'Status',
        ];
    }
}
