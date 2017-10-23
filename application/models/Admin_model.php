<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {
//this model for add photo to database
public function add()
{
    $data = [
    'title'            =>$this->input->post('title'),
    'url_photo'        =>$_SESSION['data']
  ];
  $this->db->insert('gallery',$data);
}
//this get photos for gallery admin panel
public function get_photos()
{
    $this->db->select('*');
    $this->db->from('gallery');
    $query = $this->db->get();
    return $result = $query->result();
}
//this for delete photos in gallery admin panel
public function delete_photo($id)
{
  $this->db->where('id_photo', $id);
  $this->db->delete('gallery');
}

//this model for add video to database
public function addvideo()
{
    $data = [
    'title'            =>$this->input->post('titles'),
    'maker'            =>$this->input->post('makers'),
    'url_video'        =>$_SESSION['video']
  ];
  $this->db->insert('video',$data);
}

//this get for for vdeo page admin panel
public function get_video()
{
    $this->db->select('*');
    $this->db->from('video');
    $query = $this->db->get();
    return $result = $query->result();
}

//this for delete photos in gallery admin panel
public function delete_video($id)
{
  $this->db->where('id_video', $id);
  $this->db->delete('video');
}

public function edit_status($id,$data)
{
  $this->db->where('idmakrab', $id);
  $this->db->update('makrab',$data);
}

}
