<?php
namespace app\modules\api\controllers;

use yii\rest\ActiveController;
use app\models\Telemetry;
use Yii;

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

    public function actionAdd(){
        $telemetry = new Telemetry();
        $telemetry->data = Yii::$app->request->post('data');

        if($telemetry->save()){
            Yii::$app->response->setStatusCode(201);
        }

        return $telemetry;
    }
}