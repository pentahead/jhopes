<?php 

class Home extends Controller {

public function index()
{
    $data['judul'] = 'Home';
    $data['nama'] = $this->model('User_model')->getUser();
    $data['css'] = 'home';
    $this->view('templates/header', $data);
    $this->view('home/index');
    $this->view('templates/footer', $data);
}
}
