<?php

namespace App\Controllers;

use App\Models\M_User;

class Login extends BaseController
{
	public function index()
	{
		return view('v_loginuser');
	}

	public function login_action()
	{
		$user = new M_user();
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');

		$cek = $user->get_data($email, $password);

		if (($cek['email'] == $email) && ($cek['password'] == $password)) {
			session()->set('email', $cek['email']);
			// session()->set('password', $cek['password']);
			session()->set('id', $cek['id']);
			session()->set('username', $cek['username']);
			return redirect()->to(base_url('/'));
		} else {
			session()->setFlashdata('gagal', 'Ada Salah');
			return redirect()->to(base_url('/loginuser'));
		}
	}
}
