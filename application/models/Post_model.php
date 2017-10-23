<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class post_model extends CI_Model {
//this for get data for creation in frontend
  public function get_photos()
  {
      $this->db->select('*');
      $this->db->from('gallery');
      $query = $this->db->get();
      return $result = $query->result();
  }

  public function get_video()
  {
      $this->db->select('*');
      $this->db->from('video');
      $query = $this->db->get();
      return $result = $query->result();
  }
  public function get_siglevideo($id)
  {
      $this->db->select('*');
      $this->db->from('video');
      $this->db->where('id_video', $id);
      $query = $this->db->get();
      return $result = $query->result();
  }



}
