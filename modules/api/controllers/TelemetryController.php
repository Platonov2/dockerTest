<?php
namespace app\modules\api\controllers;

use yii\rest\ActiveController;

class TelemetryController extends ActiveController
{
    public $modelClass = 'app\models\Telemetry';

    public function init()
    {
        parent::init();
    }

    public function actionIndex ()
    {
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => \app\models\Telemetry::find()
        ]);

        return $dataProvider;
    }
}