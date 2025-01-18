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
        return view('mata_pelajaran/index', $data);
    }

    public function create()
    {
        $data['guru'] = $this->guruModel->findAll();
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
}
