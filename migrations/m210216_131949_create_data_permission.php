<?php

use yii\db\Migration;

/**
 * Class m210216_131949_create_data_permission
 */
class m210216_131949_create_data_permission extends Migration
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
    //     echo "m210216_131949_create_data_permission cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.pms_master', [
            'pms_master_id' => $this->primaryKey(),
            'prs_master_id' => $this->integer()->notNull(),
            'start_date' => $this->timestamp()->notNull(),
            'end_date' => $this->timestamp()->notNull(),
            'permission_type_id' => $this->smallInteger()->notNull(),
            'permission_reason' => $this->string(300)->defaultValue(null),
            'remark' => $this->string(250)->defaultValue(null),
            'approved_id' => $this->smallInteger()->defaultValue(1),
            'superior_approved_id' => $this->smallInteger()->defaultValue(1),
            'activation_code' => $this->string(100)->defaultValue(null),
            'activation_expire' => $this->integer()->defaultValue(null),
            'approved_superior_by' => $this->integer()->defaultValue(null),
            'approved_superior_date' => $this->integer()->defaultValue(null),
            'approved_hr_by' => $this->integer()->defaultValue(null),
            'approved_hr_date' => $this->integer()->defaultValue(null),
            'properties' => $this->json(),
            'change_log' => $this->json(),
            'document_link' => $this->string()->defaultValue(null),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.pms_master');
    }
    
}
