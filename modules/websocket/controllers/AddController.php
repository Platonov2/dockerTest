<?php


namespace app\modules\websocket\controllers;


use yii\web\Controller;

/**
 * Class AddController
 * @package app\modules\websocket\controllers
 */
class AddController extends Controller
{
    /**
     * Вызов форма добавления новой записи через websocket
     * @return string
     */
    public function actionIndex(){

        return $this->render('addTelemetry');
    }
}