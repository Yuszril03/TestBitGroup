<?php

namespace App\Controllers;

use App\Models\FilmKategoriModel;
use App\Models\FilmModal;
use App\Models\KategoriModel;

class FilmKategori extends BaseController
{
    protected $filmKategoriModel;
    protected $filmModel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->filmKategoriModel = new FilmKategoriModel();
        $this->filmModel = new FilmModal();
        $this->kategoriModel = new KategoriModel();
    }
    public function index()
    {
        if (session()->get('status') == "Login") {
            $data = [
                'segment' => $this->request->uri->getSegment(1),
                'FilmKategori' => $this->filmKategoriModel->getData(),
                'Film' => $this->filmModel->getData(),
                'Kategori' => $this->kategoriModel->getData(),
            ];
            return view('MenuView', $data);
        } else {
            return redirect()->to(base_url());
        }
    }
    public function simpan()
    {
        $data = [
            'film__id' => $this->request->getVar('film'),
            'category_id' => $this->request->getVar('kategori')
        ];
        if ($this->filmKategoriModel->saveData($data)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function edit($id = false)
    {
        $where = [
            'id_fc' => $id
        ];
        $data = [
            'FilmKategori' => $this->filmKategoriModel->getData($where)->findAll()
        ];
        echo json_encode($data);
    }
    public function update()
    {
        $where = [
            'id_fc' => $this->request->getVar('id')
        ];
        $data = [
            'film__id' => $this->request->getVar('film'),
            'category_id' => $this->request->getVar('kategori')
        ];
        if ($this->filmKategoriModel->updateData($data, $where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function hapus()
    {
        $where = [
            'id_fc' => $this->request->getVar('id')
        ];
        if ($this->filmKategoriModel->hapus($where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
