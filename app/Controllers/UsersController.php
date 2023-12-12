<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;

class UsersController extends BaseController
{
    public function index()
    {
        $data['item'] = [
            'menu'  => 'Manajemen User',
        ];        
        $user = new UserModel();        
        $data['datauser'] = $user->findAll();        
        return view('view_user', $data);
    }
    public function tambah()
    {
        $user = new UserModel();
        $getRule = $user->getRule();
        $user->setValidationRules($getRule);
        
        $data = [
            'firstname'         => $this->request->getPost('firstname'),
            'lastname'          => $this->request->getPost('lastname'),
            'nickname'          => $this->request->getPost('nickname'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'password_confirm'  => $this->request->getPost('password_confirm'),
        ];

        if (!$user->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $user->errors());
        }

        return redirect()->back()->with('success', 'Success! You created a new account');
    }
    public function preview($id)
    {
        $data['item'] = [
            'menu'  => 'Ubah Data User',
        ];
        $user = new UserModel();
        $data['datauser'] = $user->where('id_user', $id)->first();
        return view('user_edit', $data);
    }
    public function ubah($id)
    {
        $user = new UserModel();
        $getRule = $user->getRule();
        $user->setValidationRules($getRule);
        $data = [
            'firstname'         => $this->request->getPost('firstname'),
            'lastname'          => $this->request->getPost('lastname'),
            'nickname'          => $this->request->getPost('nickname'),
        ];

        if (!$user->update($id, $data)) {
            return redirect()->back()->withInput()->with('errors', $user->errors());
        }
        return redirect()->back()->with('success', 'Success! You created a new account');
    }
    public function delete($id)
    {
        $user = new UserModel();
        $user->delete($id);
        return redirect()->back()->with('success', 'Success! You deleted account');
    }
}
