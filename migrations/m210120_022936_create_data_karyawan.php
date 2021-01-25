<?php

use yii\db\Migration;

/**
 * Class m210120_022936_create_data_karyawan
 */
class m210120_022936_create_data_karyawan extends Migration
{
    /**
     * {@inheritdoc}
     */
    /*
    public function safeUp()
    {

    }
    */
    /**
     * {@inheritdoc}
     */
    /*
    public function safeDown()
    {
        echo "m210120_022936_create_data_karyawan cannot be reverted.\n";

        return false;
    }
    */

    // Use up()/down() to run migration code without a transaction.
    
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hr.prs_master', [
            'prs_master_id' => $this->primaryKey(),
            'employee_code' => $this->string(50),
            'employee_name' => $this->string(100)->notNull(),
            'birth_place' => $this->string(20),
            'birth_date' => $this->date(),
            'gender_id' => $this->integer(),
            'religion_id' => $this->integer(),
            'address' => $this->text(),
            'kab_kodya' => $this->string(50),
            'province_name' => $this->string(150),
            'pos_code' => $this->string(5),
            'email' => $this->string(100),
            'blood_type' => $this->string(10),
            'handphone' => $this->string(50),
            'photo_path' => $this->string(255),
            'user_id' => $this->integer(),
            'properties' => $this->json(),
            'change_log' => $this->json(),
            'attendance_id' => $this->string(),
            'telegram_id' => $this->string(),
            'bank_name' => $this->string(),
            'account_number' => $this->string(),
            'account_name' => $this->string(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hr.prs_master');
    }
}
