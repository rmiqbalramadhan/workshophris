<?php

use yii\db\Migration;

/**
 * Class m210127_120737_create_data_status
 */
class m210127_120737_create_data_status extends Migration
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
    //     echo "m210127_120737_create_data_status cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.prs_status', [
            'prs_status_id' => $this->primaryKey(),
            'prs_master_id' => $this->integer()->notNull(),
            'start_date' => $this->date(),
            'end_date' => $this->date(),
            'status_id' => $this->integer()->defaultValue(1),
            'employment_letter' => $this->string(100)->defaultValue(Null),
            'remark' => $this->string(150)->defaultValue(Null),
            'properties' => $this->json(),
            'change_log' => $this->json(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.prs_status');
    }
    
}
