<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgentTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => "VARCHAR",
                'constraint' => 50,
            ],
            'email' => [
                'type' => "VARCHAR",
                'constraint' => 100,
                'unique' => true
            ],
            'agency_name' => [
                'type' => "VARCHAR",
                'constraint' => 150,
            ],
            'created_at' => [
                'type' => "DATE",
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('agents');
    }

    public function down()
    {
        $this->forge->dropTable('agents');
    }
}
