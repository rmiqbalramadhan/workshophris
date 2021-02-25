<?php

use yii\db\Migration;

/**
 * Class m210224_051755_create_new_table_schedule
 */
class m210224_051755_create_new_table_schedule extends Migration
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
    //     echo "m210224_051755_create_new_table_schedule cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.att_schedule', [
            'att_schedule_id' => $this->primaryKey(),
            'prs_attendance_id' => $this->string(50)->notNull(),
            'date_schedule' => $this->date()->defaultValue(null),
            'prm_schedule_id' => $this->integer()->defaultValue(null),
            'properties' => $this->json(),
            'change_log' => $this->json(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.att_schedule');
    }
    
}
