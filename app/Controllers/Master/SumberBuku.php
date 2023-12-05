<?php

namespace App\Controllers\Master;
use App\Controllers\BaseController;

class SumberBuku extends BaseController
{
    public function index()
    {
        $data['item'] = [
            'menu'  => 'Sumber Buku',
        ];
        return view('master/view_sumber_buku', $data);
    }
}
