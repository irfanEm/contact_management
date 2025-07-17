<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email'    => 'joko@example.com',
                'password' => password_hash('rahasia123', PASSWORD_DEFAULT),
                'nama'     => 'Joko Santoso',
                'no_hp'    => '081234567890',
            ],
            [
                'email'    => 'sari@example.com',
                'password' => password_hash('sangataman', PASSWORD_DEFAULT),
                'nama'     => 'Sari Wulandari',
                'no_hp'    => '082345678901',
            ],
        ];

        $this->db->table('contact')->insertBatch($data);
    }
}
