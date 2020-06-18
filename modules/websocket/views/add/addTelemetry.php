<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\modules\users\models\LoginForm; */

use app\modules\websocket\assets\addTelemetryAsset;
addTelemetryAsset::register($this);
?>

<h1>Введите данные телеметрии</h1>
<input type="text" id="telemetryValue">