<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PasienTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_rm' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_kunjung' => [
                'type'       => 'DATE', 
            ],
            'keluhan' => [
                'type'       => 'TEXT',
                'constraint' => '100',
            ],
            'diagnosa' => [
                'type'       => 'TEXT',
                'constraint' => '100',
            ],
            'riwayat_penyakit' => [
                'type'       => 'TEXT',
                'constraint' => '100',
            ],
            'dokter_pasien' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'poli' => [
                'type'       => 'TEXT',
                'constraint' => '100',
            ],
            'tipe_pesien' => [
                'type'       => 'ENUM("Rawat Jalan", "Rawat Inap")',
            ],
            'tanggal_masuk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_keluar' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
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

        $this->forge->addKey('id', true);
        $this->forge->createTable('pasiens');
    }

    public function down()
    {
        $this->forge->dropTable('pasiens');
    }
}
