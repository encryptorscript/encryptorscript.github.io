<?php


//ini Buat Control URl. (Kemana User ingin pergi?)
class Home extends Controller {
    public function index()
    {
        $data['title'] = 'HOME';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}