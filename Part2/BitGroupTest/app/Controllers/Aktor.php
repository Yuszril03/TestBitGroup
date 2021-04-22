<?php

namespace App\Controllers;

use App\Models\AktorModel;

class Aktor extends BaseController
{
    protected $aktorModel;
    public function __construct()
    {
        $this->aktorModel = new AktorModel();
    }
    public function index()
    {
        if (session()->get('status') == "Login") {
            $data = [
                'segment' => $this->request->uri->getSegment(1),
                'Aktor' => $this->aktorModel->getData()
            ];
            return view('MenuView', $data);
        } else {
            return redirect()->to(base_url());
        }
    }
    public function simpan()
    {
        $data = [
            'name_aktor' => $this->request->getVar('nama')
        ];
        if ($this->aktorModel->saveData($data)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function edit($id = false)
    {
        $where = [
            'id_aktor' => $id
        ];
        $data = [
            'Aktor' => $this->aktorModel->getData($where)->findAll()
        ];
        echo json_encode($data);
    }
    public function update()
    {
        $where = [
            'id_aktor' => $this->request->getVar('id')
        ];
        $data = [
            'name_aktor' => $this->request->getVar('nama'),
        ];
        if ($this->aktorModel->updateData($data, $where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function hapus()
    {
        $where = [
            'id_aktor' => $this->request->getVar('id')
        ];
        if ($this->aktorModel->hapus($where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
