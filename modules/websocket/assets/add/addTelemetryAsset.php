<?php

namespace app\modules\websocket\assets\add;

use yii\web\AssetBundle;

/**
 * Класс внешних файлов страницы добавления телеметрии через websocket
 */
class addTelemetryAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/websocket/assets/add';
    public $js = [
        'addTelemetry19.js'
    ];
}