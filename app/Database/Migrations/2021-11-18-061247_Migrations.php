<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Crud extends Migration
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
                        'constraint' => 11,
                        ],
                        'nominal_uang' => [
                        'type' => 'VARCHAR',
                        'constraint' => 100,
                        'null' => true
                        ]
                    ]);

            $this->forge->addKey('id', true);
			$this->forge->createTable('money');
    }
	public function down()
	{
			$this->forge->dropTable('money');
	}
}
