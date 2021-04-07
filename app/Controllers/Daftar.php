<?php

namespace App\Controllers;

use App\Models\DaftarModel;

class Daftar extends BaseController
{
	protected $daftarModel;
	public function __construct()
	{
		$this->daftarModel = new DaftarModel();
	}
	
	public function index()
	{
		$data = [
            'title'     => 'Product List Page | Oke Frozen Food',
			'barang'	=> $this->daftarModel->getDaftar()
        ];
        return view('barang/list', $data);
	}

	public function detail($slug)
	{
		$data = [
			'title' 	=> 'Product Info Page | Oke Frozen Food',
			'barang'	=> $this->daftarModel->getDaftar($slug)
		];

		if (empty($data['barang'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Daftar' . $slug . 'tidak ditemukan');	
		}

		return view('barang/detail', $data);
	}

    public function create()
	{
		session();
        $data = [
			'title' 	=> 'Tambah Data Produk | Oke Frozen Food',
            'validation' => \Config\Services::validation()
		];

		return view('barang/create', $data);
	}

    public function save()
	{
		if (!$this->validate([
            'nama_produk' => 'required|is_unique[tb_barang.nama_produk]',
            'harga' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'kadaluarsa' => 'required',
            'foto_produk' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            
            return redirect()->to('/daftar/create')->withInput()->with('validation', $validation);
        }
        
        $slug = url_title($this->request->getVar('nama_produk'), '-', true);
		$this->daftarModel->save([
			'nama_produk'	=> $this->request->getVar('nama_produk'),
			'slug'			=> $slug,
			'deskripsi'		=> $this->request->getVar('deskripsi'),
			'harga'			=> $this->request->getVar('harga'),
			'stok'			=> $this->request->getVar('stok'),
			'kadaluarsa'	=> $this->request->getVar('kadaluarsa'),
			'foto_produk'	=> $this->request->getVar('foto_produk')
		]);	
		
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');
		return redirect()->to('/daftar');
	}

    public function delete($id)
    {
        $this->daftarModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('/daftar');
    }

    public function edit($slug)
    {
        session();
        $data = [
			'title' 	=> 'Form Edit Data | Oke Frozen Food',
            'validation' => \Config\Services::validation(),
            'barang'   	=> $this->daftarModel->getDaftar($slug)
		];

		return view('barang/edit', $data);
    }

    public function update($id)
    {
        $nama_lama = $this->daftarModel->getDaftar($this->request->getVar('slug'));
        if ($nama_lama['nama_produk'] == $this->request->getVar('nama_produk')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[tb_barang.nama_produk]';
        }
        
        if (!$this->validate([
            'nama_produk' => $rule_nama,
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'kadaluarsa' => 'required',
            'foto_produk' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            
            return redirect()->to('/daftar/edit' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama_produk'), '-', true);
		$this->daftarModel->save([
			'id'            => $id,
            'nama_produk'	=> $this->request->getVar('nama_produk'),
			'slug'			=> $slug,
			'deskripsi'		=> $this->request->getVar('deskripsi'),
			'harga'			=> $this->request->getVar('harga'),
			'stok'			=> $this->request->getVar('stok'),
			'kadaluarsa'	=> $this->request->getVar('kadaluarsa'),
			'foto_produk'	=> $this->request->getVar('foto_produk')
		]);	
		
        session()->setFlashdata('pesan', 'Data berhasil diupdate!');
		return redirect()->to('/daftar');
    }
}
