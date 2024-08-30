<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'product_id'  => ['type' => 'INT', 'unsigned' => true],
            'quantity'    => ['type' => 'INT', 'unsigned' => true],
            'user_id'     => ['type' => 'INT', 'unsigned' => true, 'null' => true],
            'session_id'  => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
            'created_at'  => ['type' => 'DATETIME'],
            'updated_at'  => ['type' => 'DATETIME'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('cart');
    }
    
    public function down()
    {
        $this->forge->dropTable('cart');
    }
    
}
