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
            ]
        ]);

        $this->forge->createTable('agents');
    }

    public function down()
    {
        //
    }
}
