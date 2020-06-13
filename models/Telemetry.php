<?php


namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Telemetry extends ActiveRecord
{
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->Time = date("l dS of F Y h:I:s A");
            return true;
        }
        return false;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'telemetry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Time' => 'Ttime',
            'Data' => 'Data',
        ];
    }
}