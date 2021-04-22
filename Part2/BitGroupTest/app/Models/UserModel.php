<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'b_user';
    protected $primaryKey = 'id_user';

    public function getID($data = false)
    {
        $result =  $this->where($data);

        // $result = $this->query("SELECT * FROM " . $this->table)->where('username','Admin');
        // ->join('jeniskaryawan','');
        return $result->get();
    }
}
