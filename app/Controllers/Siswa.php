<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use CodeIgniter\Controller;

class Siswa extends Controller
{
    protected $siswaModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
    }

    public function index()
    {
        $data['siswa'] = $this->siswaModel->findAll();
        return view('siswa/index', $data);
    }

    public function create()
    {
        return view('siswa/create');
    }

    public function store()
    {
        $this->siswaModel->save([
            'nama' => $this->request->getPost('nama'),
            'nis' => $this->request->getPost('nis'),
            'kelas' => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat')
        ]);
        return redirect()->to('/siswa');
    }

    public function edit($id)
    {
        $data['siswa'] = $this->siswaModel->find($id);
        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        $this->siswaModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'nis' => $this->request->getPost('nis'),
            'kelas' => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat')
        ]);
        return redirect()->to('/siswa');
    }

    public function delete($id)
    {
        $this->siswaModel->delete($id);
        return redirect()->to('/siswa');
    }
}
