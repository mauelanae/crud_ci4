<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSeeder extends Seeder
{
  public function run()
  {
    $data = [
      [
        'no_rm'            => 'RM001',
        'tanggal_kunjung'  => '2025-01-01',
        'keluhan'          => 'Demam tinggi dan batuk',
        'diagnosa'         => 'Influenza',
        'riwayat_penyakit' => 'Tidak ada',
        'dokter_pasien'    => 'Dr. Budi',
        'poli'             => 'Umum',
        'tipe_pesien'      => 'Rawat Jalan',
        'tanggal_masuk'    => '22025-01-01',
        'tanggal_keluar'   => '2025-01-05',
        'created_at'       => date('Y-m-d H:i:s'),
        'updated_at'       => date('Y-m-d H:i:s'),
      ],
      [
        'no_rm'            => 'RM002',
        'tanggal_kunjung'  => '2025-01-04',
        'keluhan'          => 'Pusing dan lemas',
        'diagnosa'         => 'Hipotensi',
        'riwayat_penyakit' => 'Hipotensi kronis',
        'dokter_pasien'    => 'Dr. Siti',
        'poli'             => 'Interna',
        'tipe_pesien'      => 'Rawat Inap',
        'tanggal_masuk'    => '2025-01-04',
        'tanggal_keluar'   => '2025-01-06',
        'created_at'       => date('Y-m-d H:i:s'),
        'updated_at'       => date('Y-m-d H:i:s'),
      ],
      [
        'no_rm'            => 'RM003',
        'tanggal_kunjung'  => '2025-01-06',
        'keluhan'          => 'Pusing dan lemas',
        'diagnosa'         => 'Diabetes',
        'riwayat_penyakit' => 'Diabetes',
        'dokter_pasien'    => 'Dr. Mamad',
        'poli'             => 'Interna',
        'tipe_pesien'      => 'Rawat Inap',
        'tanggal_masuk'    => '2025-01-06',
        'tanggal_keluar'   => '2025-01-08',
        'created_at'       => date('Y-m-d H:i:s'),
        'updated_at'       => date('Y-m-d H:i:s'),
      ],
      [
        'no_rm'            => 'RM004',
        'tanggal_kunjung'  => '2025-01-08',
        'keluhan'          => 'Pusing dan lemas',
        'diagnosa'         => 'Flu',
        'riwayat_penyakit' => 'Tidak Ada',
        'dokter_pasien'    => 'Dr. Manta',
        'poli'             => 'Interna',
        'tipe_pesien'      => 'Rawat Jalan',
        'tanggal_masuk'    => '2025-01-08',
        'tanggal_keluar'   => '2025-01-08',
        'created_at'       => date('Y-m-d H:i:s'),
        'updated_at'       => date('Y-m-d H:i:s'),
      ],
      [
        'no_rm'            => 'RM005',
        'tanggal_kunjung'  => '2025-01-16',
        'keluhan'          => 'Pusing dan lemas',
        'diagnosa'         => 'Hipotensi',
        'riwayat_penyakit' => 'Hipotensi kronis',
        'dokter_pasien'    => 'Dr. Siti',
        'poli'             => 'Interna',
        'tipe_pesien'      => 'Rawat Inap',
        'tanggal_masuk'    => '2025-01-16',
        'tanggal_keluar'   => '2025-01-25',
        'created_at'       => date('Y-m-d H:i:s'),
        'updated_at'       => date('Y-m-d H:i:s'),
      ],
      [
        'no_rm'            => 'RM006',
        'tanggal_kunjung'  => '2025-01-16',
        'keluhan'          => 'Pusing dan lemas',
        'diagnosa'         => 'Hipotensi',
        'riwayat_penyakit' => 'Hipotensi kronis',
        'dokter_pasien'    => 'Dr. Siti',
        'poli'             => 'Interna',
        'tipe_pesien'      => 'Rawat Inap',
        'tanggal_masuk'    => '2025-01-16',
        'tanggal_keluar'   => '2025-01-25',
        'created_at'       => date('Y-m-d H:i:s'),
        'updated_at'       => date('Y-m-d H:i:s'),
      ],
      [
        'no_rm'            => 'RM007',
        'tanggal_kunjung'  => '2025-01-16',
        'keluhan'          => 'Mual',
        'diagnosa'         => 'Gerd',
        'riwayat_penyakit' => 'Magh',
        'dokter_pasien'    => 'Dr. Azmi',
        'poli'             => 'Interna',
        'tipe_pesien'      => 'Rawat Jalan',
        'tanggal_masuk'    => '2025-01-16',
        'tanggal_keluar'   => '2025-01-16',
        'created_at'       => date('Y-m-d H:i:s'),
        'updated_at'       => date('Y-m-d H:i:s'),
      ],
      [
        'no_rm'            => 'RM008',
        'tanggal_kunjung'  => '2025-01-19',
        'keluhan'          => 'Mual dan Pusing',
        'diagnosa'         => 'Magh',
        'riwayat_penyakit' => 'Magh',
        'dokter_pasien'    => 'Dr. Azmi',
        'poli'             => 'Interna',
        'tipe_pesien'      => 'Rawat Jalan',
        'tanggal_masuk'    => '2025-01-19',
        'tanggal_keluar'   => '2025-01-19',
        'created_at'       => date('Y-m-d H:i:s'),
        'updated_at'       => date('Y-m-d H:i:s'),
      ],
    ];

    // Insert data ke tabel pasiens
    $this->db->table('pasiens')->insertBatch($data);
  }
}
