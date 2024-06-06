<?php 

class Kabar extends Controller {
    public function index()
    {
        $data['judul'] = 'Kabar Panti';
        $data['css'] = 'Kabar';
        $this->view('templates/header', $data);
        $this->view('kabar/index');
        $this->view('templates/footer');
    }
}