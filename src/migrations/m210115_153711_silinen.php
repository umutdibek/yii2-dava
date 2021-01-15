<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_153711_silinen
 */
class m210115_153711_silinen extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('silinen', [
            'dosya_id' => Schema::TYPE_PK,
// $this->primaryKey()
            'davaci_ismi' => Schema::TYPE_STRING,
            'davaci_edilen_isim' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_DATETIME,
// $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        return $this->dropTable('silinen');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_153711_silinen cannot be reverted.\n";

        return false;
    }
    */
}
