<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bt_customer".
 *
 * @property int $id_customer
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $otp
 * @property string $phone
 * @property string $date_created
 * @property string $date_updated
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bt_customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'otp', 'phone', 'date_created'], 'required'],
            [['date_created', 'date_updated'], 'safe'],
            [['username', 'email', 'password', 'phone'], 'string', 'max' => 255],
            [['otp'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_customer' => Yii::t('app', 'Id Customer'),
            'username' => Yii::t('app', 'Username'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'otp' => Yii::t('app', 'Otp'),
            'phone' => Yii::t('app', 'Phone'),
            'date_created' => Yii::t('app', 'Date Created'),
            'date_updated' => Yii::t('app', 'Date Updated'),
        ];
    }
}
