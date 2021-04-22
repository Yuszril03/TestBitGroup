<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmKategoriModel extends Model
{
    protected $table = 'film_category';
    protected $primaryKey = 'id_fc';
    protected $eAutoIncrement = true;
    protected $useusTimestamps        = false;
    protected $allowedFields        = [
        "film__id",
        "category_id"
    ];
    public function getData($data = false)
    {
        if ($data == false) {
            $hasil = $this->join('b_film', 'film_category.film__id = b_film.id_film')
                ->join('b_kategori', 'film_category.category_id = b_kategori.id_kat');
            return $hasil->findAll();
        }
        $hasil = $this->join('b_film', 'film_category.film__id = b_film.id_film')
            ->join('b_kategori', 'film_category.category_id = b_kategori.id_kat')->where($data);
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
    public function soal6()
    {
        $hasil = $this->db->query('SELECT b_kategori.name_kat, Total FROM (SELECT  COUNT(category_id) AS Total, category_id  FROM film_category GROUP BY category_id ORDER BY Total DESC) AS A  JOIN b_kategori ON category_id = b_kategori.id_kat ORDER BY Total DESC LIMIT 5');
        return $hasil;
    }
    public function soal8()
    {
        $hasil = $this->db->query('SELECT `b_kategori`.`name_kat`,b_film.`title`,`b_film`.`release_year`,`b_film`.`rental_rate` FROM (SELECT  COUNT(`category_id`) AS Total, category_id,film__id FROM `film_category` GROUP BY category_id ORDER BY Total DESC) AS A JOIN `b_kategori` ON `category_id` = `b_kategori`.`id_kat` JOIN `b_film` ON film__id  = `b_film`.`id_film` ORDER BY b_film.`rental_rate` DESC LIMIT 3');
        return $hasil;
    }
}
