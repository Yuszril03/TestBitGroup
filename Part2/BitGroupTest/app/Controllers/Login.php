<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        if (session()->get('status') == "Login") {
            return  redirect()->to(base_url('Home'));
        } else {
            return view('LoginView');
        }
    }
    public function masuk()
    {
        $where = [
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('pass')),
        ];
        $user = $this->userModel->getID($where);
        if ($user->getNumRows() > 0) {
            $dataS = [
                'status' => 'Login'
            ];
            session()->set($dataS);
            return  redirect()->to(base_url('Home'));
        } else {
            session()->setFlashdata('pesan', 'Username dan Password salah!!!');
            return redirect()->to(base_url());
        }
    }
    public function keluar()
    {

        session()->destroy();
        return redirect()->to(base_url());
    }
}
