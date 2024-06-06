<?php 

class Profileuser extends Controller {

public function index()
{
    $data['judul'] = 'Profile User';
    $data['css'] = 'profile-user';
    $this->view('templates/header', $data);
    $this->view('profileuser/index');

}
}
