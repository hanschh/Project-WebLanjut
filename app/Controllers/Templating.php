<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_User;

class Templating extends BaseController
{
    public function __construct()
	{
		$this->m_user = new M_User();
	}
    public function login()
	{
		$data = [
			'title' => "Login",
		];
        echo view('v_loginuser');
	}
    public function register()
	{
		$data = [
			'title' => "Register"
		];
			
        return view('v_register', $data);
	}
	public function saveRegister()
	{
		$request = service('request');
		$data = [
			'username' => $request->getVar('username'),
            'password' => $request->getVar('password'),
			'email' => $request->getVar('email'),
			
		];
		$this->m_user->insert($data);
		return redirect()->to('/register');
	}
}

