<?php 

class SignIn extends Controller {

public function index()
{
    $data['judul'] = 'Sign In';
    $data['css'] = 'signin';
    $this->view('templates/header', $data);
    $this->view('signin/index');
}
}
