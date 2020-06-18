<?php


namespace app\modules\websocket\controllers;


use yii\web\Controller;

class AddController extends Controller
{
    public function actionIndex(){

        return $this->render('addTelemetry');
    }
}