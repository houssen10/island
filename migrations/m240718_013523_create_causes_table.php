<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%causes}}`.
 */
class m240718_013523_create_causes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%causes}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%causes}}');
    }
}
