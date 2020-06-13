<?php


namespace app\modules\websocket\controllers;


use yii\web\Controller;

class AddController extends Controller
{
    public function actionIndex(){
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => \app\models\Telemetry::find()
        ]);
    
        return $dataProvider;
    }
}