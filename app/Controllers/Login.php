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
		$username = $this->request->getPost('Username');
		$password = $this->request->getPost('Password');

		$cek = $user->get_data($username, $password);
		if (($cek['username'] == 'user') && ($cek['password'] == '121212'))
		{
			session()->set('username', $cek['username']);
			session()->set('password', $cek['password']);
			session()->set('email', $cek['email']);
			return redirect()->to(base_url('home'));
		}
		else if (($cek['username'] == 'admin') && ($cek['password'] == '121213'))
		{
			session()->set('username', $cek['username']);
			session()->set('password', $cek['password']);
			session()->set('email', $cek['email']);
			return redirect()->to(base_url('input'));
		}
		else {
			return redirect()->to(base_url('/'));
		}
	}
}