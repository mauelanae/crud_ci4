<?php

namespace App\Controllers;

use App\Models\Pasien;

class Home extends BaseController
{
    public function index(): string
    {

        $pasien = new Pasien();
        $data = $pasien->findAll();

        return view('dashboard', ['pasien' => $data]);
    }
    public function create()
    {
        $pasien = new Pasien();
        $pasien->insert([
            'no_rm'             => $this->request->getPost('no_rm'),
            'tanggal_kunjung'   => $this->request->getPost('tanggal_kunjung'),
            'keluhan'           => $this->request->getPost('keluhan'),
            'diagnosa'          => $this->request->getPost('diagnosa'),
            'riwayat_penyakit'  => $this->request->getPost('riwayat_penyakit'),
            'dokter_pasien'     => $this->request->getPost('dokter_pasien'),
            'poli'              => $this->request->getPost('poli'),
            'tipe_pesien'       => $this->request->getPost('tipe_pesien'),
            'tanggal_masuk'     => $this->request->getPost('tanggal_masuk'),
            'tanggal_keluar'    => $this->request->getPost('tanggal_keluar'),
            'created_at'        => date('Y-m-d H:i:s'),
        ]);

        return $this->response->setJSON(['status' => 'Pasien Created']);
    }

    public function update($id)
    {
        $pasien = new Pasien();
        $pasien->update($id, [
            'no_rm'             => $this->request->getPost('no_rm'),
            'tanggal_kunjung'   => $this->request->getPost('tanggal_kunjung'),
            'keluhan'           => $this->request->getPost('keluhan'),
            'diagnosa'          => $this->request->getPost('diagnosa'),
            'riwayat_penyakit'  => $this->request->getPost('riwayat_penyakit'),
            'dokter_pasien'     => $this->request->getPost('dokter_pasien'),
            'poli'              => $this->request->getPost('poli'),
            'tipe_pesien'       => $this->request->getPost('tipe_pesien'),
            'tanggal_masuk'     => $this->request->getPost('tanggal_masuk'),
            'tanggal_keluar'    => $this->request->getPost('tanggal_keluar'),
            'updated_at'        => date('Y-m-d H:i:s'),
        ]);

        return $this->response->setJSON(['status' => 'Pasien Updated']);
    }

    public function delete($id)
    {
        $model = new Pasien();

        if ($model->find($id)) {
            $model->delete($id);
            return $this->response->setJSON(['status' => 'Data berhasil dihapus']);
        } else {
            return $this->response->setStatusCode(404)->setJSON(['error' => 'Data tidak ditemukan']);
        }
    }
}
