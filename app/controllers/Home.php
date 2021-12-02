 <?php
 class Home extends Controller{
     public function index(){
         $data['ssw'] = $this->model('Home_model')->getAllSiswa();
         $this->view('tabel_siswa', $data);
     }
 }