<?php

namespace App\Controllers;

class TransaksiPeminjaman extends BaseController
{
    public function index()
    {
        $data['item'] = [
            'menu'  => 'Transaksi Peminjaman',
        ];
        return view('view_transaksi_peminjaman', $data);
    }
}

