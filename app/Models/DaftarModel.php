<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table      = 'tb_barang';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama_produk', 'deskripsi', 'harga', 'stok', 'kadaluarsa', 'foto_produk', 'slug'];

    public function getDaftar($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

}