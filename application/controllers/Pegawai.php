<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pegawai extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('PegModel'); // Load PegModel ke controller ini
  }
  
  public function index(){
    $data['pegawai'] = $this->PegModel->view();
    $this->load->view('pegawai/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->PegModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->PegModel->save(); // Panggil fungsi save() yang ada di PegModel.php
        redirect('pegawai');
      }
    }
    
    $this->load->view('pegawai/add');
  }
  
  public function ubah($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->PegModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->PegModel->edit($id); // Panggil fungsi edit() yang ada di PegModel.php
        redirect('pegawai');
      }
    }
    
    $data['pegawai'] = $this->PegModel->view_by($id);
    $this->load->view('pegawai/edit', $data);

    
  }
  
  public function hapus($id){
    $this->PegModel->delete($id); // Panggil fungsi delete() yang ada di PegModel.php
    redirect('pegawai');
  }
}