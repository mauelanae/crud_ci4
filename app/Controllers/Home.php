<?php

namespace App\Controllers;

use App\Models\Pasien;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    protected $pasienModel;

    public function __construct()
    {
        $this->pasienModel = new Pasien();
    }

    public function index()
    {
        return view('dashboard');
    }

    public function getAll()
    {
        $data = $this->pasienModel->findAll();
        return $this->response->setJSON($data);
    }

    public function store()
    {
        $this->pasienModel->save($this->request->getPost());
        return $this->response->setJSON(['status' => 'success']);
    }

    public function edit($id)
    {
        $data = $this->pasienModel->find($id);
        return $this->response->setJSON($data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $this->pasienModel->update($id, $this->request->getPost());
        return $this->response->setJSON(['status' => 'updated']);
    }

    public function delete($id)
    {
        $pasien = $this->pasienModel->find($id);

        if (!$pasien) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data tidak ditemukan']);
        }

        $this->pasienModel->delete($id);
        return $this->response->setJSON(['status' => 'deleted', 'message' => 'Data berhasil dihapus']);
    }
}
