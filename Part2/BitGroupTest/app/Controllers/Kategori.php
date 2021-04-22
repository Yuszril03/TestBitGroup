<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }
    public function index()
    {
        if (session()->get('status') == "Login") {
            $data = [
                'segment' => $this->request->uri->getSegment(1),
                'Kategori' => $this->kategoriModel->getData()
            ];
            return view('MenuView', $data);
        } else {
            return redirect()->to(base_url());
        }
    }
    public function simpan()
    {
        $data = [
            'name_kat' => $this->request->getVar('nama')
        ];
        if ($this->kategoriModel->saveData($data)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function edit($id = false)
    {
        $where = [
            'id_kat' => $id
        ];
        $data = [
            'Kategori' => $this->kategoriModel->getData($where)->findAll()
        ];
        echo json_encode($data);
    }
    public function update()
    {
        $where = [
            'id_kat' => $this->request->getVar('id')
        ];
        $data = [
            'name_kat' => $this->request->getVar('nama'),
        ];
        if ($this->kategoriModel->updateData($data, $where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function hapus()
    {
        $where = [
            'id_kat' => $this->request->getVar('id')
        ];
        if ($this->kategoriModel->hapus($where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
