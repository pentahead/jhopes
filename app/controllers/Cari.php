<?php 

class Cari extends Controller {
    public function index() {
        
        $model = $this->model('CariModel');

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $kecamatan = $_POST['kecamatan'];
            $data['panti'] = $model->getPantiByKecamatan($kecamatan);
        } else {
            $data['panti'] = []; // default data, bisa disesuaikan
        }
        var_dump($data);

        // Pass the model to the view
        $this->view('Cari/index', ['model' => $model, 'data' => $data]);
    }
}
?>


