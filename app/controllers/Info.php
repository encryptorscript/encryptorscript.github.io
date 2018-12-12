<?php


//ini Buat Control URl. (Kemana User ingin pergi?)
class Info extends Controller {
    public function index($day ='Selasa')
    {
        $data['hari'] = $day;
        $data['title'] = 'Info Utama';
        $this->view('templates/header', $data);
        $this->view('info/index', $data);
        $this->view('templates/footer', $data);
    }

    public function kelas($day = 'Selasa')
    {
        $data['hari'] = $day;
        $data['title'] = 'Info Kelas';
        $this->view('templates/header', $data);
        $this->view('info/kelas', $data);
        $this->view('templates/footer', $data);
    }
}