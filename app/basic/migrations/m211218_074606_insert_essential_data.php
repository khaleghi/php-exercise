<?php

use yii\db\Migration;

/**
 * Class m211218_074606_insert_essential_data
 */
class m211218_074606_insert_essential_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('test', ['name', 'size', 'enabled'],  [
            ['char',     1, 1],
            ['short',    2, 1],
            ['int',      2, 1],
            ['long int', 4, 1],
            ['float',    4, 0],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('test', ['name' => 'char']);
        $this->delete('test', ['name' => 'short']);
        $this->delete('test', ['name' => 'int']);
        $this->delete('test', ['name' => 'long int']);
        $this->delete('test', ['name' => 'float']);
    }
}
