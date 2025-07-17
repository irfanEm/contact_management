<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email'      => [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'unique'     => true,
            ],
            'password'   => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'no_hp'      => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true); // Primary Key
        $this->forge->createTable('contact');
    }

    public function down()
    {
        $this->forge->dropTable('contact');
    }
}
