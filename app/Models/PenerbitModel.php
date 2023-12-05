<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerbitModel extends Model
{
	protected $table            = 'tb_penerbit';
    protected $primaryKey       = 'id_penerbit';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nm_penerbit','kt_penerbit'];

    protected $validationRules      = [
    	'nm_penerbit'	=> 'required|min_length[3]',
    	'kt_penerbit'	=> 'required|min_length[3]',
    ];        
    protected $validationMessages   = [
    	'nm_penerbit'	=> [
    		'required'		=> 'Nama Penerbit Harus di Isi',
    		'min_length'	=> 'Nama Penerbit Minimal 3 Karakter'
    	],
    	'kt_penerbit'	=> [
    		'required'		=> 'Kota Penerbit Harus di Isi',
    		'min_length'	=> 'Kota Penerbit Minimal 3 Karakter'
    	],
    ];

	public function getData()
	{
        $penerbit = new PenerbitModel();
        $dataPenerbit = $penerbit->findAll();
        
        return $dataPenerbit;
	}

    public function getRule()
    {
        return $this->validationRules;        
    }    
}

