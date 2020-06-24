<?php

namespace app\modules\websocket\assets\get;

use yii\web\AssetBundle;

/**
 * Класс внешних файлов страницы получения телеметрии через websocket
 */
class getTelemetryAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/websocket/assets/get';
    public $js = [
        'getTelemetry8.js'
    ];
}