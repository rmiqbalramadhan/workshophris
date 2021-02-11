<?php

use yii\db\Migration;

/**
 * Class m210204_064005_create_data_education
 */
class m210204_064005_create_data_education extends Migration
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
    //     echo "m210204_064005_create_data_education cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.prs_education', [
            'prs_education_id' => $this->primaryKey(),
            'prs_master_id' => $this->integer()->notNull(),
            'education_year' => $this->integer()->notNull(),
            'education_name' => $this->string(100)->notNull(),
            'education_index' => $this->integer()->defaultValue(null),
            'education_certificate' => $this->string(100)->defaultValue(Null),
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
