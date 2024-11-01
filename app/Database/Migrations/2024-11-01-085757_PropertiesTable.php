<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PropertiesTable extends Migration
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
            'title' => [
                'type' => "VARCHAR",
                'constraint' => 100,
            ],
            'description' => [
                'type' => "VARCHAR",
                'constraint' => 2000,
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '20,3'
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'address' => [
                'type' => "VARCHAR",
                'constraint' => 255,
            ],
            'city' => [
                'type' => "VARCHAR",
                'constraint' => 255,
            ],
            'state' => [
                'type' => "VARCHAR",
                'constraint' => 255,
            ],
            'zip_code' => [
                'type' => "VARCHAR",
                'constraint' => 255,
            ],
            'latitude' => [
                'type' => "VARCHAR",
                'constraint' => 100,
            ],
            'longitude' => [
                'type' => "VARCHAR",
                'constraint' => 100,
            ],
            'agent_id' => [
                'type' => "INT",
                'constraint' => 9,
                'unsigned' => true,
            ],
            'type_id' => [
                'type' => "INT",
                'constraint' => 9,
                'unsigned' => true,
            ],
            'created_at' => [
                'type' => "DATE",
            ]
        ]);
        $this->forge->addForeignKey('agent_id', 'agents', 'id', 'cascade', 'cascade');
        $this->forge->addForeignKey('type_id', 'property_type', 'id', 'cascade', 'cascade');
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('properties');
    }

    public function down()
    {
        $this->forge->dropTable('properties');
    }
}
