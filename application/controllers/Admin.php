<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('upload');
    $this->load->model('admin_model');
    $this->load->model('user_model');
    $this->load->model('Auth_model');


  }
//this for view home admin panel
public  function index()
  {
    if (isset($_SESSION['owner']) == false) {
      redirect('');

    }else {
    $this->load->view('layout/header2');
    $this->load->view('backend/index');
    $this->load->view('layout/footer2');
  }

  }
//this for view gallery in admin panel
public  function gallery()
  {
    if (isset($_SESSION['owner']) == false) {
      redirect('');

    }else {
    $data['isi'] = $this->admin_model->get_photos();
    $this->load->view('layout/header2');
    $this->load->view('backend/gallery',$data);
    $this->load->view('layout/footer2');
  }
  }
//this for add photo to database
  public function addphoto()
  {

    if (isset($_SESSION['owner']) == false) {
      redirect('');

    }else {
    $this->form_validation->set_rules('title', 'Title', 'trim|required');
    if ($this->form_validation->run() == FALSE)
    {
    $this->load->view('layout/header2');
    $this->load->view('backend/addphoto',array('error' => ' ' ));
    $this->load->view('layout/footer2');
  }else {
        $config['upload_path'] = 'assets/img';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '10000';

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ( !$this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('layout/header2');
                        $this->load->view('backend/addphoto', $error);
                        $this->load->view('layout/footer2');
                }
                else
                {
                        $data = $this->upload->data();
                        $_SESSION['data'] = $data['file_name'];
                        $this->admin_model->add();
                        redirect('admin/gallery');

                }
      }

    }
  }

//this for delete photos
  public function delete_photos($id)
  {
    if (isset($_SESSION['owner']) == false) {
      redirect('');

    }else {
    $this->admin_model->delete_photo($id);
    redirect('admin/gallery');
  }
}



//this for add video to admin panel
public function addvideo()
{
  if (isset($_SESSION['owner']) == false) {
    redirect('');

  }else {
  $this->form_validation->set_rules('titles', 'Title', 'trim|required');
  $this->form_validation->set_rules('titles', 'Title', 'trim|required');
  if ($this->form_validation->run() == FALSE)
  {
  $this->load->view('layout/header2');
  $this->load->view('backend/addvideo',array('error' => ' ' ));
  $this->load->view('layout/footer2');
}else {
  $config['upload_path'] = 'assets/video';
  $config['allowed_types'] = 'mp4';
  $config['max_size'] = '1000000';
  $config['max_filename'] = '255';

      $this->upload->initialize($config);
      $this->load->library('upload', $config);
      if ( !$this->upload->do_upload('video'))
              {
                      $error = array('error' => $this->upload->display_errors());

                      $this->load->view('layout/header2');
                      $this->load->view('backend/addvideo', $error);
                      $this->load->view('layout/footer2');
              }
              else
              {
                      $data = $this->upload->data();
                      $_SESSION['video'] = $data['file_name'];
                      $this->admin_model->addvideo();
                      redirect('admin/video');

              }
    }
}
}

//this for get all video from data base
public function video()
{
  if (isset($_SESSION['owner']) == false) {
      redirect('');

    }else {
  $data['isi'] = $this->admin_model->get_video();
  $this->load->view('layout/header2');
  $this->load->view('backend/video',$data);
  $this->load->view('layout/footer2');
}
}

//this for delete photos
  public function delete_video($id)
  {
    if (isset($_SESSION['owner']) == false) {
      redirect('');

    }else {
    $this->admin_model->delete_video($id);
    redirect('admin/video');
  }
}

//this for view all data divisi
	public function divisi()
	{
		if (isset($_SESSION['owner']) == false) {
      redirect('');
}else {
		$data['isi'] = $this->user_model->get_divisi();

		$this->load->view('layout/header2');
		$this->load->view('backend/divisi',$data);
		$this->load->view('layout/footer2');
	}
}
  //this for view all data makrab
  	public function makrab()
  	{
  		if (isset($_SESSION['owner']) == false) {
        redirect('');
  }else {
  		$data['isi'] = $this->user_model->get_makrab();

  		$this->load->view('layout/header2');
  		$this->load->view('backend/makrab',$data);
  		$this->load->view('layout/footer2');
  	}

}

  //this for export to file
  	public function e_divisi()
  	{
  		if (isset($_SESSION['owner']) == false) {
        redirect('');
  }else {
  		$data['isi'] = $this->user_model->get_divisi();

  		$this->load->view('backend/e_divisi',$data);
  	}
  	}

    //this for export to file
    	public function e_makrab()
    	{
    		if (isset($_SESSION['owner']) == false) {
          redirect('');
    }else {
    		$data['isi'] = $this->user_model->get_makrab();

    		$this->load->view('backend/e_makrab',$data);
    	}
    	}

      //this for status makrab
      public function edit_status($id)
      {
        if (isset($_SESSION['owner']) == false) {
          redirect('');

        }else {
          $data = array('status' => $this->input->post('status'),);
          $this->admin_model->edit_status($id,$data);
          redirect('admin/makrab');

      }
    }

}
