<?php

namespace App\Controllers;

use App\Models\FilmModal;

class Film extends BaseController
{
    protected $filmModel;
    public function __construct()
    {
        $this->filmModel = new FilmModal();
    }
    public function index()
    {
        if (session()->get('status') == "Login") {
            $data = [
                'segment' => $this->request->uri->getSegment(1),
                'Film' => $this->filmModel->getData()
            ];
            return view('MenuView', $data);
        } else {
            return redirect()->to(base_url());
        }
    }
    public function simpan()
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'release_year' => $this->request->getVar('tahun'),
            'rental_rate' => $this->request->getVar('tarif'),
            'description' => $this->request->getVar('des'),
        ];
        if ($this->filmModel->saveData($data)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function edit($id = false)
    {
        $where = [
            'id_film' => $id
        ];
        $data = [
            'Film' => $this->filmModel->getData($where)->findAll()
        ];
        echo json_encode($data);
    }
    public function update()
    {
        $where = [
            'id_film' => $this->request->getVar('id')
        ];
        $data = [
            'title' => $this->request->getVar('title'),
            'release_year' => $this->request->getVar('tahun'),
            'rental_rate' => $this->request->getVar('tarif'),
            'description' => $this->request->getVar('des'),
        ];
        if ($this->filmModel->updateData($data, $where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function hapus()
    {
        $where = [
            'id_film' => $this->request->getVar('id')
        ];
        if ($this->filmModel->hapus($where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
