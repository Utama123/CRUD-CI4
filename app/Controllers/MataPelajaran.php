<?php

namespace App\Controllers;

use App\Models\MataPelajaranModel;
use App\Models\GuruModel;
use App\Models\SiswaPelajaranModel;

class MataPelajaran extends BaseController
{
    protected $mataPelajaranModel;
    protected $guruModel;
    protected $siswaPelajaranModel;

    public function __construct()
    {
        $this->mataPelajaranModel = new MataPelajaranModel();
        $this->guruModel = new GuruModel();
        $this->siswaPelajaranModel = new SiswaPelajaranModel();
    }

    public function index()
    {
        $data['mata_pelajaran'] = $this->mataPelajaranModel->getWithGuru();
        $data['mata_pelajaran'] = $this->mataPelajaranModel->findall();

        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Daftar mata_pelajaran',
            'guru' => $this->guruModel->findAll(),
        ];


        return view('mata_pelajaran/index', $data);
    }

    public function create()
    {
        $data['mata_pelajaran'] = $this->mataPelajaranModel->findAll();
        return view('mata_pelajaran/create', $data);
    }

    public function store()
    {
        $this->mataPelajaranModel->save([
            'nama_pelajaran' => $this->request->getPost('nama_pelajaran'),
            'guru_id' => $this->request->getPost('guru_id')
        ]);
        return redirect()->to('/mata_pelajaran');
    }

    public function siswa($pelajaran_id)
    {
        $data['siswa'] = $this->siswaPelajaranModel->getSiswaByPelajaran($pelajaran_id);
        $data['pelajaran'] = $this->mataPelajaranModel->find($pelajaran_id);
        return view('mata_pelajaran/siswa', $data);
    }
    public function edit($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $mata_pelajaran = $this->mataPelajaranModel->find($id);

        $data = [
            'title' => 'Edit Mata Pelajaran',
            'mata_pelajaran' => $mata_pelajaran,
        ];

        return view('mata_pelajaran/edit', $data);
    }

    public function update($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $this->mataPelajaranModel->update($id, [
            'nama_pelajaran' => $this->request->getPost('nama_pelajaran'),
        ]);

        return redirect()->to('/mata_pelajaran')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

}
