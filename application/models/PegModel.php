<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PegModel extends CI_Model {
  // Fungsi untuk menampilkan semua data pegawai
  public function view(){
    return $this->db->get('pegawai')->result();
  }
  
  // Fungsi untuk menampilkan data pegawai berdasarkan id-nya
  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('pegawai')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, nama tidak harus divalidasi
    // Jadi id di validasi hanya ketika menambah data pegawai saja
    if($mode == "save")
      $this->form_validation->set_rules('input_id', 'id', 'required|numeric|max_length[5]');
    
    $this->form_validation->set_rules('input_name', 'name', 'required|max_length[35]');
    $this->form_validation->set_rules('input_email', 'email', 'required|max_length[35]');
    $this->form_validation->set_rules('input_address', 'address', 'required');
    $this->form_validation->set_rules('input_phone', 'phone', 'required|max_length[15]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel pegawai
  public function save(){
    $data = array(
      "id" => $this->input->post('input_id'),
      "name" => $this->input->post('input_name'),
      "email" => $this->input->post('input_email'),
      "address" => $this->input->post('input_address'),
      "phone" => $this->input->post('input_phone')
    );
    
    $this->db->insert('pegawai', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data pegawai berdasarkan nama pegawai
  public function edit($id){
    $data = array(
      "id" => $this->input->post('input_id'),
      "name" => $this->input->post('input_name'),
      "email" => $this->input->post('input_email'),
      "address" => $this->input->post('input_address'),
      "phone" => $this->input->post('input_phone')
    );
    
    $this->db->where('id', $id);
    $this->db->update('pegawai', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data pegawai berdasarkan nama pegawai
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('pegawai'); // Untuk mengeksekusi perintah delete data
  }
}