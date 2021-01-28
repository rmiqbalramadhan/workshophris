<?php

use yii\db\Migration;

/**
 * Class m210125_101042_create_data_karir
 */
class m210125_101042_create_data_karir extends Migration
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
    //     echo "m210125_101042_create_data_karir cannot be reverted.\n";

    //     return false;
    // }

    
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.prs_career', [
            'prs_career_id' => $this->primaryKey(),
            'prs_master_id' => $this->integer()->notNull(),
            'start_date' => $this->date()->notNull(),
            'status_id' => $this->integer()->notNull()->defaultValue(1),
            'company_id' => $this->integer()->notNull(),
            'division_id' => $this->integer()->notNull(),
            'department_id' => $this->integer()->defaultValue(0),
            'level_id' => $this->integer()->notNull(),
            'reason' => $this->string(100)->defaultValue(Null),
            'superior_id' => $this->integer(),
            'employment_letter' => $this->string(100)->defaultValue(Null),
            'job_title_id' => $this->integer()->notNull()->defaultValue(0),
            'properties' => $this->json(),
            'change_log' => $this->json(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.prs_career');
    }
    
}
