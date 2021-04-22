<?php

namespace App\Controllers;

use App\Models\FilmAktorModel;
use App\Models\FilmKategoriModel;
use App\Models\FilmModal;

class Home2 extends BaseController
{
    protected $filKetegoriModel;
    protected $filmModel;
    protected $filmAktorModel;
    public function __construct()
    {
        $this->filKetegoriModel = new FilmKategoriModel();
        $this->filmModel = new FilmModal();
        $this->filmAktorModel = new FilmAktorModel();
    }
    public function index()
    {
        if (session()->get('status') == "Login") {
            // $hasil = $this->filKetegoriModel->soal8();
            // foreach ($hasil->getResult('array') as $r) {
            //     echo $r['name_kat'];
            // }
            $data = [
                'segment' => $this->request->uri->getSegment(1),
                'Soal6' => $this->filKetegoriModel->soal6(),
                'Soal7' => $this->filmModel->soal7(),
                'Soal8' => $this->filKetegoriModel->soal8(),
                'soal5' => $this->filmAktorModel->getData(),
            ];
            return view('MenuView', $data);
        } else {
            return redirect()->to(base_url());
        }
    }
}
