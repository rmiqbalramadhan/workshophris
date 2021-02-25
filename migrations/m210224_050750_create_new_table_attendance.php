<?php

use yii\db\Migration;

/**
 * Class m210224_050750_create_new_table_attendance
 */
class m210224_050750_create_new_table_attendance extends Migration
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
    //     echo "m210224_050750_create_new_table_attendance cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.att_attendance_log', [
            'att_attendance_log_id' => $this->primaryKey(),
            'pin' => $this->string(15)->notNull(),
            'nik' => $this->string(15)->defaultValue(null),
            'nik' => $this->string(15)->notNull(),
            'location' => $this->string(50)->notNull(),
            'serial_number' => $this->string(100)->notNull(),
            'date_time' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'type' => $this->string(25)->notNull(),
            'status' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.att_attendance_log');
    }
    
}
