<?php

use yii\db\Migration;

class m160225_045722_blog extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(128)->notNull(),
            'categori' => $this->string(64),
            'slug' => $this->string(128),
            'body' => $this->text()->notNull(),
            'author' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            ], $tableOptions);

        $this->createTable('{{%tag}}', [
            'article_id' => $this->integer(),
            'tag' => $this->string(64),
            'PRIMARY KEY ([[article_id]], [[tag]])'
            ], $tableOptions);

        
    }

    public function down()
    {
        $this->dropTable('{{%tag}}');
        $this->dropTable('{{%post}}');
    }
}
