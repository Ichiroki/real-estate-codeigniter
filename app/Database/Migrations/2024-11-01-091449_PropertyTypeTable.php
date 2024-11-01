<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PropertyTypeTable extends Migration
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
            'type_name' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('property_type');
    }

    public function down()
    {
        $this->forge->dropTable('property_type');
    }
}
