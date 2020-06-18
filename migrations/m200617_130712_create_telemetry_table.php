<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%telemetry}}`.
 */
class m200617_130712_create_telemetry_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%telemetry}}', [
            'id' => $this->primaryKey(),
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
