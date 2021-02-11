<?php

use yii\db\Migration;

/**
 * Class m210211_034059_create_data_leave
 */
class m210211_034059_create_data_leave extends Migration
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
    //     echo "m210211_034059_create_data_leave cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.lve_master', [
            'lve_master_id' => $this->primaryKey(),
            'prs_master_id' => $this->integer()->notNull(),
            'start_date' => $this->date()->notNull(),
            'end_date' => $this->date()->notNull(),
            'day_count' => $this->smallInteger()->notNull(),
            'return_date' => $this->date()->defaultValue(null),
            'leave_reason' => $this->string(300)->defaultValue(null),
            'balance' => $this->smallInteger()->defaultValue(null),
            'substitute_employee' => $this->string(50)->defaultValue(null),
            'remark' => $this->string(250)->defaultValue(null),
            'approved_id' => $this->smallInteger()->defaultValue(1),
            'superior_approved_id' => $this->smallInteger()->defaultValue(1),
            'activation_code' => $this->string(100)->defaultValue(null),
            'activation_expire' => $this->integer()->defaultValue(null),
            'approved_superior_by' => $this->integer()->defaultValue(null),
            'approved_superior_date' => $this->date()->defaultValue(null),
            'approved_hr_by' => $this->integer()->defaultValue(null),
            'approved_hr_date' => $this->date()->defaultValue(null),
            'properties' => $this->json()->defaultValue(null),
            'change_log' => $this->json()->defaultValue(null),
            'leave_type_id' => $this->smallInteger()->defaultValue(0),
            'other_balance' => $this->smallInteger()->defaultValue(0),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.lve_master');
    }
    
}
