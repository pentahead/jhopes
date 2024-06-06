<?php 

class SignUp extends Controller {

public function index()
{
    $data['judul'] = 'Sign Up';
    $data['css'] = 'signup';
    $this->view('templates/header', $data);
    $this->view('SignUp/index');
}
}
