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
		$user = new Login_user();
		$email = $this->request->getPost('Email');
		$password = $this->request->getPost('Password');

		$cek = $user->get_data($username, $password);
		if (($cek['email'] == $email) && ($cek['password'] == $password))
       
		{
			session()->set('email', $cek['email']);
			session()->set('password', $cek['password']);
			
			return redirect()->to(base_url('/admin'));
		}
		// else if (($cek['username'] == $username) && ($cek['password'] == $password))
		// {
		// 	session()->set('username', $cek['username']);
		// 	session()->set('password', $cek['password']);
		// 	session()->set('email', $cek['email']);
		
		// }
		else {
            session()->setFlashdata('Login Gagal');
			return redirect()->to(base_url('/'));
		}
	}
}