<?php

use yii\db\Migration;

/**
 * Class m210204_061720_create_data_family
 */
class m210204_061720_create_data_family extends Migration
{
    /**
     * {@inheritdoc}
     */
    // public function safeUp()
    // {

    // }

    /**
     * {@inheritdoc}
     */
    // public function safeDown()
    // {
    //     echo "m210204_061720_create_data_family cannot be reverted.\n";

    //     return false;
    // }

    
    //Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.prs_family', [
            'prs_family_id' => $this->primaryKey(),
            'prs_master_id' => $this->integer()->notNull(),
            'full_name' => $this->string(50)->notNull(),
            'relation_id' => $this->integer()->defaultValue(null),
            'birth_place' => $this->string(50)->defaultValue(null),
            'birth_date' => $this->date(),
            'gender_id' => $this->integer()->defaultValue(1),
            'remark' => $this->string(200)->defaultValue(null),
            'properties' => $this->json(),
            'change_log' => $this->json(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.prs_family');
    }
    
}
