<?php

use yii\db\Migration;

/**
 * Class m210225_071437_create_data_param_schedule
 */
class m210225_071437_create_data_param_schedule extends Migration
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
    //     echo "m210225_071437_create_data_param_schedule cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.att_prm_schedule', [
            'prm_shcedule_id' => $this->primaryKey(),
            'code_name' => $this->string(15)->notNull(),
            'description' => $this->string(50)->notNull(),
            'check_in' => $this->string(10)->defaultValue(null),
            'check_out' => $this->string(10)->defaultValue(null),
            'rest_in' => $this->string(10)->defaultValue(null),
            'rest_out' => $this->string(10)->defaultValue(null),
            'dispense_minute' => $this->integer()->defaultValue(null),            
            'properties' => $this->json(),
            'change_log' => $this->json(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.att_prm_schedule');
    }
    
}
