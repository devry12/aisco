<?php
class user_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

public function insert_firstmeet()
{
    $data = [
      'name'            => $this->input->post('name'),
      'email'           => $this->input->post('email'),
      'nim'             => $this->input->post('nim'),
      'school'          => $this->input->post('school'),
      'dob'             => $this->input->post('dob'),
      'tlp'             => $this->input->post('tlp'),
      'division'        => $this->input->post('division'),
      'ambition'        => $this->input->post('ambition'),
    ];

    $this->db->insert('firstmeet',$data);
}



public function insert_division()
{
    $data = [
      'name'            => $this->input->post('name'),
      'prodi'           => $this->input->post('prodi'),
      'idline'           => $this->input->post('line'),
      'division'        => $this->input->post('divisi'),
      'reason'          => $this->input->post('reason'),
    ];

    $this->db->insert('division',$data);
}

public function insert_makrab()
{
    $data = [
      'namas'              => $this->input->post('nama'),
      'nim'               => $this->input->post('nim'),
      'teman'             => $this->input->post('teman'),
      'wali'              => $this->input->post('wali'),
      'penyakit'          => $this->input->post('penyakit'),
    ];

    $this->db->insert('makrab',$data);
}

public function get_data()
{
  $this->db->select('*');
  $this->db->from('firstmeet');
  $query = $this->db->get();
  return $result = $query->result();
}

public function get_divisi()
{
  $this->db->select('*');
  $this->db->from('division');
  $query = $this->db->get();
  return $result = $query->result();
}

public function get_makrab()
{
  $this->db->select('*');
  $this->db->from('makrab');
  $query = $this->db->get();
  return $result = $query->result();
}



}



 ?>
