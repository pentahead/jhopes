<?php 

class About extends Controller{

    public function index($nama = 'andi', $pekerjaan = 'guru', $umur = 22)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About';
        $data['css'] = 'about';
        
       $this->view('templates/header', $data);
       $this->view('about/index', $data);
       $this->view('templates/footer', $data);
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer',$data);
    }
}