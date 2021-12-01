<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\M_Money;

class Templating extends BaseController
{
	public function __construct()
	{
		$this->m_money = new M_Money(); 
		$this->m_user = new UsersModel();
	}

	public function index()
	{
		$saldo = $this->m_money->findAll();
		$total=0;

		foreach($saldo as $s){
			$total += $s['nominal_uang'];
		};

		$data = [
			'jumlah' => $this->m_money->countAllResults(),
			'total' => $total,
			'title' => "Admin"
		];	
        return view('v_admin', $data);
	}

	public function diagram_member()
	{
		$hari = array_fill(0, 7, '');
        for ($x = -6; $x <= 0; $x++) {
            $hari[$x + 6] = date("d M Y", strtotime(" $x days"));
        };
		$total = array_fill(0, 7, 0);
        for ($x = -6; $x <= 0; $x++) {
            $sum = $this->m_money->like('created_at', date("Y-m-d", strtotime("$x days")))->findAll();
            foreach ($sum as $sum) {
                $total[$x + 6]++;
            }
        };
		$data = [
            'hari' => $hari,
			'total' => $total
        ];
        echo json_encode($data);

	}

	public function register()
	{
		session();
		$data = [
			'validate' => \Config\Services::validation(),
		];
		return view('v_register', $data);
	}


	public function login()
	{
		return view('v_login');
	}
}
