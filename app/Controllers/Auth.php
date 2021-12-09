<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function register()
    {
        $val = $this->validate(
            [
                'fullname' => 'required',
                'email' => [
                    'rules' => 'required|is_unique[users.email]',
                    'errors' => [
                        'is_unique' => '{field} sudah dipakai'
                    ]
                ],
                'password' => 'required',
            ],
        );

        if (!$val) {
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validate', $pesanvalidasi);
        }
        $data = array(
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        );
        $model = new UsersModel;
        $model->insert($data);
        session()->setFlashdata('pesan', 'Selamat Anda berhasil Registrasi, silakan login!');
        return redirect()->to('/');
    }

    public function login()
    {

        $model = new UsersModel;
        $table = 'users';
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($email, $table);
        var_dump($row);
        // if ($row != NULL) {
        //     $cek=['email'=>$email];
        //     session()->set($cek);
        //     return redirect()->to(base_url('/dashboard'));
        // }
        if ($row == NULL) {
            session()->setFlashdata('pesan', 'Email atau Password Salah');
            return redirect()->to(base_url('/'));
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'fullname' => $row->fullname,
                'email' => $row->email,

            );
            session()->set($data);
            session()->setFlashdata('pesan', 'Anda telah melakukan Login');
            return redirect()->to(base_url('/dashboard'));
<<<<<<< HEAD
        } else {
=======
        }
        else{
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
            session()->setFlashdata('pesan', 'Email atau Password Salah');
            return redirect()->to(base_url('/'));
        }
        session()->setFlashdata('pesan', 'Email atau Password Salah');
        return redirect()->to(base_url('/'));
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('pesan', 'Berhasil Logout');
        return redirect()->to(base_url('/'));
    }
}
