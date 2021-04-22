<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmAktorModel extends Model
{
    protected $table = 'film_actor';
    protected $primaryKey = 'id_fa';
    protected $useAutoIncrement = true;
    protected $useTimestamps        = false;
    protected $allowedFields        = [
        "film_id",
        "aktor_id"
    ];
    public function getData($data = false)
    {
        if ($data == false) {
            $hasil = $this->join('b_film', 'film_actor.film_id = b_film.id_film')
                ->join('b_aktor', 'film_actor.aktor_id = b_aktor.id_aktor');
            return $hasil->findAll();
        }
        $hasil = $this->join('b_film', 'film_actor.film_id = b_film.id_film')
            ->join('b_aktor', 'film_actor.aktor_id = b_aktor.id_aktor')->where($data);
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
