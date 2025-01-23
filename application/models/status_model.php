<?php

  class status_model extends CI_Model {

    public function get_status() {    
      $this->db->select();
      $this->db->from('status');
      $query = $this->db->get();  

      return $query->result();  
    }
  }