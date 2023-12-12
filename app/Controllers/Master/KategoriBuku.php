<?php

namespace App\Controllers\Master;
use App\Controllers\BaseController;
use App\Models\KategoriModel;
use Config\Services;

class KategoriBuku extends BaseController
{
    protected $session;
    public function __construct()
    {
        $this->session = Services::session();
    }
    public function index()
    {
        $model = new KategoriModel();
        $data['item'] = [
            'model' => $model->findAll(),
            'menu'  => 'Kategori Buku',
        ];
        
        if (!$this->session->isLoggedIn) {
            return redirect()->to('login');
        }
        
        return view('master/view_kategori_buku', $data);
    }

    public function tambah()
    {
        $data['item'] = [
            'menu'  => 'Tambah Kategori Buku',
        ];
        return view('master/tambah_kategori_buku', $data);
    }
    public function delete(int $id)
    {
        $penerbit = new KategoriModel();
        $penerbit->delete($id);
        return redirect()->back()->with('success', 'Success! You deleted a data penerbit');
    }

}
