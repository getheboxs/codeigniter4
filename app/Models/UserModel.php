<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'tb_user';
    protected $primaryKey       = 'id_user';
    protected $returnType       = 'array';
    protected $allowedFields    = ['username','password','nickname',
        'firstname','lastname'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $dateFormat    = 'datetime';

    protected $validationRules      = [
        'username'  => 'required|min_length[5]|is_unique[tb_user.username,id_user]',
        'password'  => 'required|min_length[5]',
        'password_confirm'  => 'matches[password]',
        'nickname'  => 'required|min_length[3]',
        'firstname' => 'required|min_length[3]',
        'lastname'  => 'required|min_length[3]'
    ];

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    public function getData()
    {
        $users = new UsersModel();
        $datausers = $users->findAll();
        
        return $datausers;
    }

    public function getRule()
    {
        return $this->validationRules;        
    }    

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) return $data;
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }
}

