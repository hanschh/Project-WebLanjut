<?php

namespace App\Controllers;

class Crud extends BaseController
{
    public function index()
    {
        $data['data'] = $this->md->findAll();
        $data['title'] = 'Sistem Informasi Tabungan';
        echo view('header', $data);
        echo view('v_money', $data);
        echo view('footer', $data);
    }
    //form
    function form_create()
    {
        $data['title'] = 'Tambah Data';
        echo view('header', $data);
        echo view('v_create');
        echo view('footer', $data);
    }
    function form_update($kd)
    {
        $data['data'] = $this->md->find($kd);
        $data['title'] = 'Update Data';
        echo view('header', $data);
        echo view('v_update', $data);
        echo view('footer', $data);
    }
    //process
    function create()
    {
        $this->md->insert($this->request->getPost());
        return redirect()->to(base_url('/'));
    }
    function update($kd)
    {
        $this->md->update($kd, $this->request->getPost());
        return redirect()->to(base_url('/'));
    }
    function delete($kd)
    {
        $this->md->delete($kd);
        return redirect()->to(base_url('/'));
    }
}
