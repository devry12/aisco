<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('security');
    $this->load->model('Auth_model');
  }

  public function login()
  {
    if ($this->Auth_model->is_LoggedIn()) {
      redirect('');
    }
    $this->form_validation->set_rules('nim','Nim','trim|required|callback_CheckEmail|callback_CheckRole',
            array(
                'required'      => 'You have not provided %s.',
                ));
    $this->form_validation->set_rules('password','Password','trim|required|callback_CheckPassword',
    array(
        'required'      => 'You have not provided %s.',
        ));
    if ($this->form_validation->run()=== false) {

      $this->load->view('layout/header');
      $this->load->view('auth/login');
      $this->load->view('layout/footer');
    }else {
      $user = $this->Auth_model->get_user('nim',$this->input->post('nim'));

        //set session
        $_SESSION['user_id']    = $user['id_users'];
        $_SESSION['logged_in']  = true;


        //redirect to profile page
        if ($user['role'] == 3) {
          $_SESSION['owner'] = $user['role'] == 3;
          redirect('admin');
        }else {
          redirect('');
        }


    }
  }

  //this for check email
    public function CheckEmail($nim)
    {
      if(!$this->Auth_model->get_user('nim',$nim)){
        $this->form_validation->set_message('CheckEmail','This %s Not exists.');
        return false;
      }
      return true;
    }

    //this for check password
      public function CheckPassword($password)
      {
          $user = $this->Auth_model->get_user('nim',$this->input->post('nim'));
          if (!$this->Auth_model->CheckPassword($user['nim'],$password))
          {
            $this->form_validation->set_message('CheckPassword','This %s is incorrect.');
            return false;
          }
          return true;

      }

      //this for check role user
       public function CheckRole($nim)
       {
         $user = $this->Auth_model->get_user('nim',$nim);
         if ($user['role'] == 0) {
           $this->form_validation->set_message('CheckRole','This account is not active please check your email.');
           return false;
         }
         return true;
       }

      public function register()
      {
        $this->form_validation->set_rules('name','Name','trim|required|min_length[5]|max_length[32]');
        $this->form_validation->set_rules('nim','Nim',
                'required|is_unique[users.nim]',
                array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
                    ));
        $this->form_validation->set_rules('email','Email','trim|required|is_unique[users.Email]',
              array(
                  'required'      => 'You have not provided %s.',
                  'is_unique'     => 'This %s already exists.'
                  ));
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]');
        $this->form_validation->set_rules('password2','Second Password','required|matches[password]');

        if ($this->form_validation->run()=== false) {
          $this->load->view('layout/header');
          $this->load->view('auth/register');
          $this->load->view('layout/footer');
        }else {
          //sava user
          $this->Auth_model->insert_user();
          //verify email
          $this->send_email_verification($this->input->post('email'),$_SESSION['token']);
          //redirect user
          redirect("auth/login");
        }

      }

      public function send_email_verification($email, $token)
      {
        $this->load->library('email');
        $this->email->from('support@aisco.cf','Devry Kawiryan');
        $this->email->to($email);
        $this->email->subject('confirmation email');
        $email = $email;
        $email = str_replace('.', '_', $email);
        $this->email->message("
                      Click for confirmation Page
                      <a href='<?=base_url()?>auth/verify/$email/$token'>Confirmation Your Email</a>
            ");
        $this->email->set_mailtype('html');
        $this->email->send();
      }

      public function verify_email($email,$token)
      {
        $email = $email;
        $email = str_replace('_', '.', $email);
        $user = $this->Auth_model->get_user('email',$email);
        //check email exists or not
        if (!$user) {
          die('email not exists');
    }
        if ($user['token'] !== $token) {
          die('token not match');
        }

          //update role user
          $this->Auth_model->update_role($user['id_users'],1);

          //set session
          $_SESSION['user_id'] = $user['id_users'];
          $_SESSION['logged_in'] = true;
          //redirect to profile page
          redirect('');



      }
      //logout system
      public function logout()
      {
        unset($_SESSION['user_id'],$_SESSION['logged_in'],$_SESSION['owner']);
        redirect('auth/login');
      }

}
