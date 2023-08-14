<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos_rubik extends Migration{
    public function up(){

        
         $this->forge->addField([
         		'id'          		=> [
         				'type'           => 'INT',
         				'unsigned'       => TRUE,
         				'auto_increment' => TRUE
         		],
         		'nombre'       		=> [
         				'type'           => 'VARCHAR',
         				'constraint'     => '100',
         		],
                 'descripcion'       		=> [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
                ],
                'imagen'       		=> [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                ],
         ]);
         $this->forge->addKey('id', TRUE);
        $this->forge->createTable('productos_rubik');
    }

    public function down(){
        $this->forge->dropTable('productos_rubik');
    }
}