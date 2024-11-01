<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserWithRoleTable extends Migration
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
            'user_id' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true
            ],
            'role_id' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true
            ],
        ]);

        $this->forge->addKey(['user_id', 'role_id'], true);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('role_id', 'roles', 'id');
        $this->forge->createTable('user_with_role');
    }

    public function down()
    {
        $this->forge->dropTable('user_with_role');
    }
}
