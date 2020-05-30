<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableLawyers extends Migration
{
	public function up()
	{
		$fields = [
            'first_name' => ['type' => 'varchar', 'constraint' => 100],
            'last_name' => ['type' => 'varchar', 'constraint' => 100],
			'no' => ['type' => 'varchar', 'constraint' => 100],
			'street' => ['type' => 'varchar', 'constraint' => 255],
			'city' => ['type' => 'varchar', 'constraint' => 255],
			'dob' => ['type' => 'varchar', 'constraint' => 255],
			'nic' => ['type' => 'varchar', 'constraint' => 255],
			'gender' => ['type' => 'varchar', 'constraint' => 255],
			'email' => ['type' => 'varchar', 'constraint' => 255],
			'phone' => ['type' => 'varchar', 'constraint' => 255],
			'regno' => ['type' => 'varchar', 'constraint' => 255],
			'user_name' => ['type' => 'varchar', 'constraint' => 255],
			'password' => ['type' => 'varchar', 'constraint' => 255],
			'c_password' => ['type' => 'varchar', 'constraint' => 255],
			'details' => ['type' => 'text'],
            'created_at' => ['type' => 'datetime', 'null' => true],
            'updated_at' => ['type' => 'datetime', 'null' => true],
            'deleted_at' => ['type' => 'datetime', 'null' => true],

		];
		$this->forge->addField('id');
		$this->forge->addField($fields);
		
		$this->forge->addKey('first_name');
        $this->forge->addKey('created_at');

		$this->forge->createTable('lawyers');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('lawyers');
	}
}
