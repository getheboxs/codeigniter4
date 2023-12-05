<?php

namespace App\Controllers;

class RiwayatPeminjaman extends BaseController
{
    public function index()
    {
        $data['item'] = [
            'menu'  => 'Riwayat Peminjaman',
        ];
        return view('view_riwayat_peminjaman', $data);
    }
}
