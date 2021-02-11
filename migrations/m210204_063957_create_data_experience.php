<?php

use yii\db\Migration;

/**
 * Class m210204_063957_create_data_experience
 */
class m210204_063957_create_data_experience extends Migration
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
    //     echo "m210204_063957_create_data_experience cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.prs_experience', [
            'prs_experience_id' => $this->primaryKey(),
            'prs_master_id' => $this->integer()->notNull(),
            'experience_year' => $this->integer()->notNull(),
            'experience_name' => $this->string(100)->notNull(),
            'experience_certificate' => $this->string(100)->notNull(),
            'remark' => $this->string(150)->defaultValue(Null),
            'properties' => $this->json(),
            'change_log' => $this->json(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.prs_experience');
    }
    
}
