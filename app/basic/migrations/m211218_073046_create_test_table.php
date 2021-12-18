<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%test}}`.
 */
class m211218_073046_create_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%test}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(12)->notNull()->unique(),
            'size' => $this->integer(),
            'enabled' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%test}}');
    }
}
