<?php

namespace App\Controllers;

use App\Models\AktorModel;
use App\Models\FilmAktorModel;
use App\Models\FilmModal;

class FilmAktor extends BaseController
{
    protected $filmAktorModel;
    protected $filmModel;
    protected $aktorModel;
    public function __construct()
    {
        $this->filmAktorModel = new FilmAktorModel();
        $this->filmModel = new FilmModal();
        $this->aktorModel = new AktorModel();
    }
    public function index()
    {
        if (session()->get('status') == "Login") {
            $data = [
                'segment' => $this->request->uri->getSegment(1),
                'FilmAktor' => $this->filmAktorModel->getData(),
                'Film' => $this->filmModel->getData(),
                'Aktor' => $this->aktorModel->getData(),
            ];
            return view('MenuView', $data);
        } else {
            return redirect()->to(base_url());
        }
    }
    public function simpan()
    {
        $data = [
            'film_id' => $this->request->getVar('film'),
            'aktor_id' => $this->request->getVar('aktor')
        ];
        if ($this->filmAktorModel->saveData($data)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function edit($id = false)
    {
        $where = [
            'id_fa' => $id
        ];
        $data = [
            'Filmaktor' => $this->filmAktorModel->getData($where)->findAll()
        ];
        echo json_encode($data);
    }
    public function update()
    {
        $where = [
            'id_fa' => $this->request->getVar('id')
        ];
        $data = [
            'film_id' => $this->request->getVar('film'),
            'aktor_id' => $this->request->getVar('aktor')
        ];
        if ($this->filmAktorModel->updateData($data, $where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
    public function hapus()
    {
        $where = [
            'id_fa' => $this->request->getVar('id')
        ];
        if ($this->filmAktorModel->hapus($where)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
