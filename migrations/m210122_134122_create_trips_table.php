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

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%trips}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->string()->notNull(),
            'location' => $this->string(32)->notNull(),
            'catch_amount' => $this->string()->notNull(),
            'trip_description' => $this->string(),
            'created_at' => $this->date()->notNull(),
            'updated_at' => $this->dateTime(),
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%trips}}');
    }
}
