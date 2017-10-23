<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

  public function is_LoggedIn()
  {
    if (!isset($_SESSION['logged_in'])) {
      return false;
    }
    return true;
  }


  //this for check password correct or not in database

  public function CheckPassword($nim,$password)
  {
    $hash = $this->get_user('nim',$nim)['password'];
    if (password_verify($password,$hash)) {
      return true;
    }
    return false;
  }

  //this for get user from database
    public function get_user($key,$val)
    {
      $query = $this->db->get_where('users',array($key=>$val ));
      if (!empty($query->row_array())) {
        return $query->row_array();
      }

      return false;


    }


    //this for insert user from register
      public function insert_user()
      {
        $this->load->helper('string');
        $_SESSION['token'] = random_string('alnum',16);

        $data = [
                'name'      =>$this->input->post('name'),
                'nim'       =>$this->input->post('nim'),
                'email'     =>$this->input->post('email'),
                'password'  =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'token'     =>$_SESSION['token']
        ];
        $this->db->insert('users', $data);
      }

      //this for update role user
        public function update_role($user_id,$role)
        {

          $data = array('role' => $role);
          $this->db->where('id_users', $user_id);
          return $this->db->update('users',$data);
        }

}
