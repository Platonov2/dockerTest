<?php


namespace app\modules\websocket\controllers;


use yii\web\Controller;

/**
 * Class AddController
 * @package app\modules\websocket\controllers
 */
class WsTelemetryController extends Controller
{
    /**
     * Вызов форма добавления новой записи через websocket
     * @return string
     */
    public function actionAdd(){

        return $this->render('addTelemetry');
    }

    public function actionGet(){

        return $this->render('getTelemetry');
    }
}