<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\M_Money;

class Templating extends BaseController
{
	public function __construct()
	{
<<<<<<< HEAD
		$this->m_money = new M_Money();
=======
		$this->m_money = new M_Money(); 
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
		$this->m_user = new UsersModel();
	}

	public function index()
	{
		if (session()->get('email') == '') {
<<<<<<< HEAD
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}
		$saldo = $this->m_money->findAll();
		$total = 0;

		foreach ($saldo as $s) {
=======
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
         }
		$saldo = $this->m_money->findAll();
		$total=0;

		foreach($saldo as $s){
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
			$total += $s['nominal_uang'];
		};

		$data = [
			'jumlah' => $this->m_money->countAllResults(),
			'total' => $total,
			'title' => "Admin"
<<<<<<< HEAD
		];
		return view('v_admin', $data);
=======
		];	
        return view('v_admin', $data);
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
	}

	public function diagram_member()
	{
		$hari = array_fill(0, 7, '');
<<<<<<< HEAD
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
=======
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

>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
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
		if (!session()->get('email') == '') {
			return redirect()->to(base_url('dashboard'));
		}
		return view('v_login');
	}
}
