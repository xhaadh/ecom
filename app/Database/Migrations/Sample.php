<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sample extends Migration
{
    public function up()
    {
        $this->forge->addColumn('products', [
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('products', 'image');
    }
}
