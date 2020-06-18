<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
?>

<div class="telemetryData">
    <h1>Данные телеметрии</h1>

    <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
        ]);
    ?>

</div>