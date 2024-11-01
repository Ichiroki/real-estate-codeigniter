<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RoleTable extends Migration
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
            'role_name' => [
                'type' => "VARCHAR",
                'constraint' => 50,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('roles');
    }

    public function down()
    {
        $this->forge->dropTable('roles');
    }
}
