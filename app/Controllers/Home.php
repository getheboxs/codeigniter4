<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['item'] = [
            'menu'  => 'Dashboard',
        ];
        return view('view_home', $data);
        // return view('welcome_message');
    }
}
