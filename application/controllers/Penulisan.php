<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulisan extends CI_Controller {

public function __construct(){
    parent::__construct();
    
    $this->load->model('Model_penulisan'); // Load modelbuku ke controller ini
    $this->load->helper(array('form', 'url')); 
    $this->load->library('pagination');
  }
	public function index()
	{
        $dariDB = $this->Model_penulisan->cekidpenulisan();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 3, 4);
        $idpenulisanSekarang = $nourut + 1;
        $data = array('id_penulisan' => $idpenulisanSekarang);
        $this->load->view("formpenulisan", $data);
    }
 
	function tampil($id_penulisan=NULL){
    $this->load->library('pagination'); // Load librari paginationnya
    
    $query = $this->db->get('penulisan'); // Query untuk menampilkan semua data siswa
    
    $config['base_url'] = base_url().'Penulisan/tampil';
    $config['total_rows'] = $query->num_rows();
    $config['per_page'] = 6;
    $config['first_page'] = 'Awal';
    $config['last_page'] = 'Akhir';
    $config['next_page'] = '&laquo;';
    $config['prev_page'] = '&raquo;';
    
    $this->pagination->initialize($config); // Set konfigurasi paginationnya
	
	//buat pagination
 $data['halaman'] = $this->pagination->create_links();

   //tamplikan data
 $data['query'] = $this->modelbuku->ambil_buku($config['per_page'], $id);
    
    $this->load->view('datapenulisan', $data);
  }

public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Model_penulisan->validation("simpan_data")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Model_penulisan->simpan_data(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect('Penulisan/tambah');
      }
    }
    
    $this->load->view('formpenulisan');
  }
	public function saranadanprasarana()
	{
		$this->load->view('aboutsaranadanprasarana');
	}
}
