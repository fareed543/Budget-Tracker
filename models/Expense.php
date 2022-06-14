<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bt_expense".
 *
 * @property int $id_expense
 * @property int $id_category
 * @property int $id_customer
 * @property string $expense_name
 * @property string $image
 * @property string $amount
 * @property int $deleted
 * @property int $created_by
 * @property string $date_created
 * @property int $updated_by
 * @property string $date_updated
 */
class Expense extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bt_expense';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_category', 'id_customer', 'expense_name', 'image', 'amount', 'deleted', 'created_by', 'date_created', 'updated_by'], 'required'],
            [['id_category', 'id_customer', 'deleted', 'created_by', 'updated_by'], 'integer'],
            [['date_created', 'date_updated'], 'safe'],
            [['expense_name', 'image', 'amount'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_expense' => Yii::t('app', 'Id Expense'),
            'id_category' => Yii::t('app', 'Id Category'),
            'id_customer' => Yii::t('app', 'Id Customer'),
            'expense_name' => Yii::t('app', 'Expense Name'),
            'image' => Yii::t('app', 'Image'),
            'amount' => Yii::t('app', 'Amount'),
            'deleted' => Yii::t('app', 'Deleted'),
            'created_by' => Yii::t('app', 'Created By'),
            'date_created' => Yii::t('app', 'Date Created'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'date_updated' => Yii::t('app', 'Date Updated'),
        ];
    }
}
