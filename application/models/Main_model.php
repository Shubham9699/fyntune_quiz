<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Main_model extends CI_Model {

  public function __construct() {
    parent::__construct(); 
  }

  // Fetch records
  public function getData($rowno,$rowperpage,$search="") {
 
    $this->db->select('*');
    $this->db->from('subscribers');

    if($search != ''){
      $this->db->like('name', $search);
      $this->db->or_like('email', $search);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCount($search = '') {

    $this->db->select('count(*) as allcount');
    $this->db->from('subscribers');
 
    if($search != ''){
      $this->db->like('name', $search);
      $this->db->or_like('email', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

}
