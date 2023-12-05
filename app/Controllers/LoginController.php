<?php

namespace App\Controllers;
use Config\Services;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $session;
    public function __construct()
    {
        // start session
        $this->session = Services::session();
    }

    public function index()
    {
        if ($this->session->isLoggedIn) {
            return redirect()->to('home');
        }
        return view('view_login');
    }

    public function login()
    {
        $rules = [
            'username'  => 'required|min_length[5]',
            'password'  => 'required|min_length[5]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->to('login')->withInput()->with('errors', $this->validator->getErrors());
        }

        $users = new UserModel();        
        $user = $users->where('username', $this->request->getPost('username'))->first();
        
        if ( is_null($user) || ! password_verify($this->request->getPost('password'), $user['password']) ) 
        {
            return redirect()->to('login')->withInput()->with('error', $users->errors());
        }
        
        $this->session->set('isLoggedIn', true);
        
        return redirect()->to('home');
    }

    public function logout()
    {
        $this->session->remove(['isLoggedIn', 'userData']);
        return redirect()->to('login');
    }
}
