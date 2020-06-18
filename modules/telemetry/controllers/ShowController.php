<?php
namespace app\modules\telemetry\controllers;

use app\models\Telemetry;
use yii\web\Controller;

class ShowController extends Controller
{
    /**
     * Отрисовка страницы со списком телеметрии
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => \app\models\Telemetry::find()
        ]);

        return $this->render('telemetryView', ['dataProvider' => $dataProvider]);
    }
}