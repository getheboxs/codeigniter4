<?php

namespace App\Controllers;

class DataBuku extends BaseController
{
    public function index()
    {
        $data['item'] = [
            'menu'  => 'Data Buku',
        ];
        return view('view_data_buku', $data);
    }
}

