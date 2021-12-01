<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Money extends Migration
{
	public function up()
	{
			$this->forge->addField([
					'id' => [
						'type' => 'INT',
						'constraint' => 11,
						'unsigned' => true,
						'auto_increment' => true
					],
					'nama' => [
						'type' => 'VARCHAR',
						'constraint' => 100,
					],
					'no_rekening' => [
						'type' => 'VARCHAR',
						'constraint' => 150,
					],
					'nominal_uang' => [
						'type' => 'INT',
						'constraint' => 11,
					],
					'created_at'			=> [
						'type'				=> 'TIMESTAMP',
						'null'				=> true
					],
					'updated_at'			=> [
						'type'				=> 'TIMESTAMP',
						'null'				=> true
					],
					'deleted_at'			=> [
						'type'				=> 'TIMESTAMP',
						'null'				=> true
					],
			]);
			$this->forge->addKey('id', true);
			$this->forge->createTable('money');
	}

	public function down()
	{
			$this->forge->dropTable('money');
	}
}
