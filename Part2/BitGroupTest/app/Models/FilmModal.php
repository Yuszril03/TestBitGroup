<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModal extends Model
{
    protected $table = 'b_film';
    protected $primaryKey = 'id_film';
    protected $useAutoIncrement = true;
    protected $useTimestamps        = false;
    protected $allowedFields        = [
        "title",
        "release_year",
        "description",
        "rental_rate"
    ];
    public function getData($data = false)
    {
        if ($data == false) {
            // $hasil = $this->join('jenisproduk', 'produk.jenisProduk = jenisproduk.idJenisProduk')
            //     ->join('bahan', 'produk.jenisBahan = bahan.idBahan');
            return $this->findAll();
        }

        $hasil = $this->where($data);
        return $hasil;
    }
    public function saveData($data)
    {
        $hasil = $this->insert($data);
        return $hasil;
    }
    public function updateData($data, $where)
    {
        return $this->set($data)->where($where)->update();
        // return $this->where($where)->update($data);
    }
    public function hapus($where)
    {
        return $this->where($where)->delete();
    }
    public function soal7(){
        $hasil = $this->db->query('SELECT * FROM b_film ORDER BY rental_rate DESC LIMIT 5');
        return $hasil;
    }
}
