<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_penulisan extends CI_Model {

public function view(){
      return $this->db->get('penulisan')->result();
  }
public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    
    if($mode == "simpan_data")
      $this->form_validation->set_rules('id_penulisan', 'id_penulisan', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('judul_penulisan', 'judul_penulisan', 'required|max_length[255]');
    $this->form_validation->set_rules('nama_pembuat', 'nama_pembuat', 'required');
    $this->form_validation->set_rules('tahun_penulisan', 'tahun_penulisan', 'required|max_length[15]');
	$this->form_validation->set_rules('jurusan', 'jurusan', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }

public function simpan_data()
		{
			$config['upload_path']   = './file/';
			$config['allowed_types'] = 'docx|pdf|doc';
			$config['max_size']      = '5048000';
			$config['max_width']     = '1024';
			$config['max_height']    = '768';
			$config['file_name']     = url_title($this->input->post('file_penulisan'));
			$filename = $this->upload->file_name;
			$this->load->library('upload',$config);
			$this->upload->do_upload('file_penulisan');
			$data = $this->upload->data();
			
			$data = array(
				'id_penulisan'        => $this->input->post('id_penulisan'),
				'judul_penulisan'        => $this->input->post('judul_penulisan'),
				'nama_pembuat'       => $this->input->post('nama_pembuat'),
				'tahun_penulisan'        => $this->input->post('tahun_penulisan'),
				'jurusan'        => $this->input->post('jurusan'),
				'file_penulisan'            => $data['file_name']
			);
			$this->db->insert('penulisan',$data);
			redirect('Penulisan/tambah');
		}	

	public function ambildatamahasiswa($num, $offset)
 {
 $this->db->order_by('username', 'ASC');

$data = $this->db->get('login', $num, $offset);

return $data->result();
 }

}