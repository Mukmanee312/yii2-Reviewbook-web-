<?php

use yii\db\Migration;

/**
 * Class m230618_065305_category
 */
class m230618_065305_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%category}}', [
            'id_cat' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
            'author' => $this->string(200)->notNull(),
            'publisher' => $this->string(200)->notNull(),
            'category' => "ENUM('นวนิยาย','วรรณกรรมแปลร่วมสมัย','วรรณกรรมแปลสะท้อนชีวิตและสังคม','วรรณกรรม/เรื่องสั้น','วรรณกรรมไทย','นิยายแปล','จิตวิทยา/พัฒนาตนเอง')",
            'img_path'=>$this -> string(200) ->notNull()  -> defaultValue('img/defaul1.png'),

            
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230618_065305_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230618_065305_category cannot be reverted.\n";

        return false;
    }
    */
}
