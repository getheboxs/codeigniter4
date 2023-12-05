<?php

namespace App\Controllers;

class Keanggotaan extends BaseController
{
    public function index()
    {
        $data['item'] = [
            'menu'  => 'Keanggotaan',
        ];
        return view('view_keanggotaan', $data);
    }
}
