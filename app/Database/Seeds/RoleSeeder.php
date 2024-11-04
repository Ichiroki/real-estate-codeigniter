<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $user = [
            'id' => NULL,
            'role_name' => 'User',
        ];

        $agent = [
            'id' => NULL,
            'role_name' => 'Agent',
        ];

        $this->db->table('roles')->insert($user);
        $this->db->table('roles')->insert($agent);
    }

}
