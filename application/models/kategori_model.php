<?php

  class kategori_model extends CI_Model {

    public function get_kategori() {    
      $this->db->select();
      $this->db->from('kategori');
      $query = $this->db->get();  

      return $query->result();  
    }
  }