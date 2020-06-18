<?php

namespace app\modules\websocket\assets;

use yii\web\AssetBundle;

/**
 * Класс внешних файлов страницы добавления телеметрии через websocket
 */
class addTelemetryAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/websocket/assets/';
    public $js = [
        'addTelemetry19.js'
    ];
}