<?php

namespace App\Controllers\Master;
use App\Controllers\BaseController;
use App\Models\PenerbitModel;

class DataPenerbit extends BaseController
{
    public function index()
    {        
        $data['item'] = [
            'menu'  => 'Data Penerbit',
        ];        
        $penerbit = new PenerbitModel();        
        $data['datapenerbit'] = $penerbit->paginate(5, 'penerbit');
        $data['datapager'] = $penerbit->pager;
        $data['nomor'] = nomor($this->request->getVar('page_penerbit'), 5);
        
        return view('master\view_data_penerbit2', $data);
    }    
    public function tambah()
    {
        $data['item'] = [
            'menu'  => 'Tambah Data Penerbit',
        ];
        
        return view('master\tambah_data_penerbit', $data);
    }
    public function simpan()
    {
        $penerbit = new PenerbitModel();
        $getRule = $penerbit->getRule();
        $penerbit->setValidationRules($getRule);
        $terbit = [
            "nm_penerbit" => $this->request->getPost('nm_penerbit'),
            "kt_penerbit" => $this->request->getPost('kt_penerbit'),
        ];

        if (!$penerbit->insert($terbit)) {
            return redirect()->back()->withInput()->with('errors', $penerbit->errors());
        }
        return redirect()->back()->with('success', 'Success! You created a new data penerbit');        
    }
    public function preview($id)
    {
        $data['item'] = [
            'menu'  => 'Ubah Data Penerbit',
        ];
        $penerbit = new PenerbitModel();
        $data['datapenerbit'] = $penerbit->where('id_penerbit', $id)->first();
        return view('master\ubah_data_penerbit', $data);
    }
    public function ubah($id)
    {
        $penerbit = new PenerbitModel();
        $getRule = $penerbit->getRule();
        $penerbit->setValidationRules($getRule);
        $terbit = [
            "nm_penerbit" => $this->request->getPost('nm_penerbit'),
            "kt_penerbit" => $this->request->getPost('kt_penerbit'),
        ];

        if (!$penerbit->update($id, $terbit)) {
            return redirect()->back()->withInput()->with('errors', $penerbit->errors());
        }
        return redirect()->back()->with('success', 'Success! You created a new data penerbit');        
    }
    public function delete($id)
    {
        $penerbit = new PenerbitModel();
        $penerbit->delete($id);
        return redirect()->back()->with('success', 'Success! You deleted a data penerbit');
    }
}

