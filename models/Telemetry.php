<?php
 
namespace app\models;
 
use yii\db\ActiveRecord;
 
class Telemetry extends ActiveRecord
{
    public static function tableName()
    {
        return 'telemetry';
    }
    
}