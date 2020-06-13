<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%telemetry}}`.
 */
class m200610_090705_create_telemetry_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%telemetry}}', [
            'id' => $this->primaryKey(),
            'time' => $this->string(),
            'data' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%telemetry}}');
    }
}
