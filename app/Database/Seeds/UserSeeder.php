<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = [
            'id' => null,
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => password_hash('password', PASSWORD_BCRYPT)
        ];

        $agents = [
            'id' => null,
            'name' => 'Agent',
            'email' => 'agent@gmail.com',
            'password' => password_hash('password', PASSWORD_BCRYPT)
        ];

        $this->db->table('users')->insert($user);
        $this->db->table('users')->insert($agents);
    }
}
