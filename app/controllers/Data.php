<?php

class Data extends Controller {
    public function index()
    {
        $data['title'] = 'Data Siswa';
        $data['sis'] = $this->model('Siswa_model')->getAllSiswa();
        $data['nama'] = $this->model('Nama_model')->getNama();
        $this->view('templates/header', $data);
        $this->view('data/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('data/detail', $data);
        $this->view('templates/footer', $data);
    }
}