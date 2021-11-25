<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 200,
                'unsigned' => true,
                'auto_increment' => true
            ],
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '80',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			
			
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('login');
	}

	public function down()
	{
		$this->forge->dropTable('login');
	}
}