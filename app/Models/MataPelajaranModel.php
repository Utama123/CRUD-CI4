<?php

namespace App\Models;

use CodeIgniter\Model;

class MataPelajaranModel extends Model
{
    protected $table = 'mata_pelajaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pelajaran', 'guru_id'];

    public function getWithGuru()
    {
        return $this->select('mata_pelajaran.*, guru.nama as guru_nama')
                    ->join('guru', 'guru.id = mata_pelajaran.guru_id')
                    ->findAll();
    }
}
