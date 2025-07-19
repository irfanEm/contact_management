<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email' => 'alpha@superadmin.com',
            'password' => password_hash('alpha1997', PASSWORD_DEFAULT)
        ];

        $this->db->table('users')->insert($data);
    }
}
