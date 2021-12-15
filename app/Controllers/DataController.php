<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\M_Money;

<<<<<<< HEAD

class DataController extends BaseController
{
=======
use App\Models\UsersModel;
use App\Models\M_Money;

class DataController extends BaseController
{
<<<<<<< HEAD
>>>>>>> 31bac986871cd65e4c64c3f79cd80f0155d55a3e
    public function __construct()
    {
        $this->m_money = new M_Money();
        $this->m_user = new UsersModel();
<<<<<<< HEAD
=======
=======
    public function __construct (){
        $this->m_money= new M_Money();
        $this->m_user= new UsersModel();

>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
>>>>>>> 31bac986871cd65e4c64c3f79cd80f0155d55a3e
    }
    public function index()
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
<<<<<<< HEAD
        }
=======
<<<<<<< HEAD
        }
=======
         }
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
>>>>>>> 31bac986871cd65e4c64c3f79cd80f0155d55a3e
        $data['data'] = $this->m_money->findAll();
        $data['title'] = 'Data Nasabah';
        echo view('header', $data);
        echo view('v_money', $data);
        echo view('footer', $data);
    }
    public function indexuser()
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
        }
        $data['data'] = $this->m_money->findAll();
        $data['title'] = 'Data Nasabah';
        echo view('header', $data);
        echo view('v_user', $data);
        echo view('footer', $data);
    }
    //form
    function form_create()
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
<<<<<<< HEAD
        }
=======
<<<<<<< HEAD
        }
=======
         }
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
>>>>>>> 31bac986871cd65e4c64c3f79cd80f0155d55a3e
        $data['title'] = 'Tambah Data';
        echo view('header', $data);
        echo view('v_create');
        echo view('footer', $data);
    }
    function form_update($kd)
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
<<<<<<< HEAD
        }
=======
<<<<<<< HEAD
        }
=======
         }
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
>>>>>>> 31bac986871cd65e4c64c3f79cd80f0155d55a3e
        $data['data'] = $this->m_money->find($kd);
        $data['title'] = 'Update Data';
        echo view('header', $data);
        echo view('v_update', $data);
        echo view('footer', $data);
    }
    //process
    function create()
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
<<<<<<< HEAD
        }
=======
<<<<<<< HEAD
        }
=======
         }
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
>>>>>>> 31bac986871cd65e4c64c3f79cd80f0155d55a3e
        $this->m_money->insert($this->request->getPost());
        return redirect()->to(base_url('/admin'));
    }
    function update($kd)
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
<<<<<<< HEAD
        }
=======
<<<<<<< HEAD
        }
=======
         }
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
>>>>>>> 31bac986871cd65e4c64c3f79cd80f0155d55a3e
        $this->m_money->update($kd, $this->request->getPost());
        return redirect()->to(base_url('/admin'));
    }
    function delete($kd)
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
<<<<<<< HEAD
        }
=======
<<<<<<< HEAD
        }
=======
         }
>>>>>>> 49f483481eb8efa084aef888374cf875d7069e9a
>>>>>>> 31bac986871cd65e4c64c3f79cd80f0155d55a3e
        $this->m_money->delete($kd);
        return redirect()->to(base_url('/admin'));
    }
}
