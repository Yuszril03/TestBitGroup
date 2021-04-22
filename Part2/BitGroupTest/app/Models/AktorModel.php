<?php

namespace App\Models;

use CodeIgniter\Model;

class AktorModel extends Model
{
    protected $table = 'b_aktor';
    protected $primaryKey = 'id_aktor';
    protected $useAutoIncrement = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'last_update';
    protected $updatedField         = 'last_update';
    protected $useTimestamps        = true;
    protected $allowedFields        = [
        "name_aktor"
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
}
