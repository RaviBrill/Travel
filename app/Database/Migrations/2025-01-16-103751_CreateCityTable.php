<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCityTable extends Migration
{
    public function up()
    {
        // Create the 'city' table
        $this->forge->addField([
            'city_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => false,
            ],
            'city_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'state_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'country_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
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
        $this->forge->addKey('city_id', true);

        // Add foreign keys
        $this->forge->addForeignKey('state_id', 'state', 'state_id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('country_id', 'country', 'id', 'CASCADE', 'CASCADE');

        // Create the table
        $this->forge->createTable('city');
    }

    public function down()
    {
        // Drop the 'city' table
        $this->forge->dropTable('city');
    }
}
