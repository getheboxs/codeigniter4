<?php

namespace App\Controllers\Master;
use App\Controllers\BaseController;
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
        $data['item'] = [
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
}
