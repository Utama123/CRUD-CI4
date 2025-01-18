<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaPelajaranModel extends Model
{
    protected $table = 'siswa_pelajaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['siswa_id', 'pelajaran_id'];

    public function getSiswaByPelajaran($pelajaran_id)
    {
        return $this->select('siswa_pelajaran.*, siswa.nama as siswa_nama, siswa.kelas')
                    ->join('siswa', 'siswa.id = siswa_pelajaran.siswa_id')
                    ->where('pelajaran_id', $pelajaran_id)
                    ->findAll();
    }
}
