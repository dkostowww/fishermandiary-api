<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trips}}`.
 */
class m210122_134122_create_trips_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trips}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%trips}}');
    }
}
