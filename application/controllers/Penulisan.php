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
        $this->load->view('formpenulisan');
    }
 function proses()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'docx|pdf|doc';
        $config['max_size']             = 100000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('file_penulisan'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('formpenulisan', $error);
        }
        else
        {
            $data['id_penulisan'] = $this->input->post('id_penulisan');
            $data['judul_penulisan'] = $this->input->post('judul_penulisan');
            $data['nama_pembuat'] = $this->input->post('nama_pembuat');
            $data['tahun_penulisan'] = $this->input->post('tahun_penulisan');
            $data['file_penulisan'] = $this->upload->data("file_name");
            $data['jurusan'] = $this->input->post('jurusan');
            $this->db->insert('penulisan',$data);
            redirect('Penulisan');
        }
    }
	function tampil($id=NULL){
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
 $data['query'] = $this->Model_penulisan->ambildatamahasiswa($config['per_page'], $id);
    
    $this->load->view('dataregister', $data);
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
