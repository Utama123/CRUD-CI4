<?php

namespace App\Controllers;

use App\Models\GuruModel;
use CodeIgniter\Controller;

class Guru extends Controller
{
    protected $guruModel;

    public function __construct()
    {
        $this->guruModel = new GuruModel();
    }

    public function index()
    {
        $data['guru'] = $this->guruModel->findAll();
        return view('guru/index', $data);
    }

    public function create()
    {
        return view('guru/create');
    }

    public function store()
    {
        $this->guruModel->save([
            'nama' => $this->request->getPost('nama'),
            'nip' => $this->request->getPost('nip'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon')
        ]);
        return redirect()->to('/guru');
    }

    public function edit($id)
    {
        $data['guru'] = $this->guruModel->find($id);
        return view('guru/edit', $data);
    }

    public function update($id)
    {
        $this->guruModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'nip' => $this->request->getPost('nip'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon')
        ]);
        return redirect()->to('/guru');
    }

    public function delete($id)
    {
        $this->guruModel->delete($id);
        return redirect()->to('/guru');
    }
}
