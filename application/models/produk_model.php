<?php

  class produk_model extends CI_Model {

    public function get_produk() {    
      $this->db->select('produk.id_produk, produk.nama_produk, kategori.nama_kategori, produk.harga, status.nama_status');
      $this->db->from('produk');
      $this->db->join('status', 'produk.status_id = status.id_status');
      $this->db->join('kategori', 'produk.kategori_id = kategori.id_kategori');
      $this->db->where('status.nama_status', 'bisa dijual');
      $query = $this->db->get();  

      return $query->result();  
    }
    
    public function tambah_produk($data) {
      return $this->db->insert('produk', $data);
    }

    public function get_produk_by_id($id_produk) {  
      $this->db->where('id_produk', $id_produk);  
      $query = $this->db->get('produk');  
      
      return $query->row();
    }  

    public function edit_produk($id_produk, $data) {  
      $this->db->where('id_produk', $id_produk);

      return $this->db->update('produk', $data);
    }

    public function hapus_produk($id_produk) {  
      $this->db->where('id_produk', $id_produk);

      return $this->db->delete('produk');
    }
  }