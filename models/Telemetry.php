<?php
 
namespace app\models;
 
use yii\db\ActiveRecord;

/**
 * This is the model class for table "telemetry".
 *
 * ! Внимение. Код генерируется автоматически. Не пытайтесь изменить класс вручную!
 *
 * @property int $id
 * @property string|null telemetry
 */
class Telemetry extends ActiveRecord
{
    public static function tableName()
    {
        return 'telemetry';
    }
    
}