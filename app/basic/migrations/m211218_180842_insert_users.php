<?php

use yii\db\Migration;

/**
 * Class m211218_180842_insert_users
 */
class m211218_180842_insert_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('users', ['username', 'password', 'authKey', 'accessToken'],  [
            ['admin', '123456', 'auth01', 'token01'],
            ['user' , 'user',   'auth02', 'token02'],
            ['guest', '123',    'auth03', 'token03'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('users', ['username' => 'admin']);
        $this->delete('users', ['username' => 'user']);
        $this->delete('users', ['username' => 'guest']);
    }
}
