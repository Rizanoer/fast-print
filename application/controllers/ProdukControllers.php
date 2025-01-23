<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class ProdukControllers extends CI_Controller {
  
  public function __construct() {    
    parent::__construct();    
    $this->load->model('produk_model');
    $this->load->model('kategori_model');
    $this->load->model('status_model');
  }    
  
  public function index() {  
    $data['produks'] = $this->produk_model->get_produk();
  
    $this->load->view('produk', $data);  
  }

  public function tambah() {  
    $data['kategori'] = $this->kategori_model->get_kategori();
    $data['status'] = $this->status_model->get_status();
  
    $this->load->view('tambah_produk', $data);
  }

  public function tambah_produk() {
    $input = $this->input->post();

    $data = array(  
      'nama_produk' => $input['nama_produk'],
      'kategori_id' => $input['kategori_id'],
      'harga'       => $input['harga'],
      'status_id'   => $input['status_id']
    );  
  
    $this->produk_model->tambah_produk($data);

    redirect('produkcontrollers');  
  }  

  public function edit($id_produk) {  
    $data['produk'] = $this->produk_model->get_produk_by_id($id_produk);  
    $data['kategori'] = $this->kategori_model->get_kategori();
    $data['status'] = $this->status_model->get_status();
  
    $this->load->view('edit_produk', $data);
  }

  public function update() {
    $input = $this->input->post();
    $id_produk = $input['id_produk'];

    $data = array(  
      'nama_produk' => $input['nama_produk'],
      'kategori_id' => $input['kategori_id'],
      'harga'       => $input['harga'],
      'status_id'   => $input['status_id']
    );  
  
    $this->produk_model->edit_produk($id_produk, $data);

    redirect('produkcontrollers');
  }

  public function hapus($id_produk) {
    $this->produk_model->hapus_produk($id_produk);
  
    redirect('produkcontrollers');
  }
}  
