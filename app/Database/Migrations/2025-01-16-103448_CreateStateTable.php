<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStateTable extends Migration
{
    public function up()
    {
        // Create the 'state' table
        $this->forge->addField([
            'state_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => false,
            ],
            'state_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'state_code' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'country_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'short_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
                'null'       => true,
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'deleted_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);

        // Add the primary key
        $this->forge->addKey('state_id', true);

        // Add a foreign key for 'country_id' (assuming a 'country' table exists)
        // $this->forge->addForeignKey('country_id', 'country', 'id', 'CASCADE', 'CASCADE');

        // Create the table
        $this->forge->createTable('state');
    }

    public function down()
    {
        // Drop the 'state' table
        $this->forge->dropTable('state');
    }
}