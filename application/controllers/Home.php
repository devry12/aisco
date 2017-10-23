<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('post_model');
	}

	public function index()
	{
		$data['isi'] = $this->post_model->get_photos();
		$this->load->view('layout/flat_header');
		$this->load->view('flat/index',$data);
		$this->load->view('layout/flat_footer');
	}

	public function firstmeet()
	{
		$this->form_validation->set_rules('name','Name','required',
															array('required' 	=> 'You must provide a %s.'));
		$this->form_validation->set_rules('nim','Nim','required|is_unique[firstmeet.nim]',
															array('required' 	=> 'You must provide a %s.',
																		'is_unique' => 'Your %s has been used'));
		$this->form_validation->set_rules('email','Email','required',
															array('required' 	=> 'You must provide a %s.'));
		$this->form_validation->set_rules('school','School','required',
															array('required' 	=> 'You must provide a %s.'));
		$this->form_validation->set_rules('dob','Date of birth','required',
															array('required' 	=> 'You must provide a %s.'));
		$this->form_validation->set_rules('tlp','Phone Number','required',
															array('required' 	=> 'You must provide a %s.'));
		$this->form_validation->set_rules('division','Division','required',
															array('required' 	=> 'You must provide a %s.'));
		$this->form_validation->set_rules('ambition','Ambition','required',
															array('required' 	=> 'You must provide a %s.'));


if ($this->form_validation->run()===false) {

			$this->load->view('layout/header4');
			$this->load->view('frontend2/firstmeet');
			$this->load->view('layout/footer3');
		}else {
		//insert data to database
		$this->user_model->insert_firstmeet();
		redirect("");
		}

	}



	//this for devision
		public function division()
		{
			$this->form_validation->set_rules('name','Name','required',
																array('required' 	=> 'You must provide a %s.'));
			$this->form_validation->set_rules('prodi','Prodi','required',
																array('required' 	=> 'You must provide a %s.'));
			$this->form_validation->set_rules('divisi','divisi','required',
																array('required' 	=> 'You must provide a %s.'));
			$this->form_validation->set_rules('reason','Reason','required',
																array('required' 	=> 'You must provide a %s.'));
			$this->form_validation->set_rules('line','Line','required',
																array('required' 	=> 'You must provide a %s.'));


	if ($this->form_validation->run()===false) {

				$this->load->view('flat/form/divisi');
			}else {
			//insert data to database
			$this->user_model->insert_division();
			redirect("");
			}

		}


		//this for makrab
			public function makrab()
			{
				$this->form_validation->set_rules('nim','nim','required',
																	array('required' 	=> 'You must provide a %s.'));
				$this->form_validation->set_rules('wali','wali','required',
																	array('required' 	=> 'You must provide a %s.'));


		if ($this->form_validation->run()===false) {

					$this->load->view('flat/form/makrab');
				}else {
				//insert data to database
				$this->user_model->insert_makrab();
				redirect("bayar");
				}

			}

			//this for status pembayaran
				public function status_makrab()
				{
					$data['isi'] = $this->user_model->get_makrab();
						$this->load->view('flat/form/bayar',$data);
					}



	public function contact()
		{
			$this->load->view('layout/header');
			$this->load->view('frontend/contact');
			$this->load->view('layout/footer');
		}


//this for view all data member
	public function data()
	{
		if (isset($_SESSION['owner']) == false) {
      redirect('');
}else {
		$data['isi'] = $this->user_model->get_data();

		$this->load->view('layout/header2');
		$this->load->view('backend/data',$data);
		$this->load->view('layout/footer2');
	}
	}
//this for export to file
	public function export()
	{
		if (isset($_SESSION['owner']) == false) {
      redirect('');
}else {
		$data['isi'] = $this->user_model->get_data();

		$this->load->view('frontend/export',$data);
	}
	}

	public function gallery()
	{

		$data['isi'] = $this->post_model->get_photos();

		$this->load->view('layout/header');
		$this->load->view('frontend2/gallery',$data);
		$this->load->view('layout/footer');
	}

	public function video()
	{
		$data['isi'] = $this->post_model->get_video();
		$this->load->view('layout/header');
		$this->load->view('frontend/video',$data);
		$this->load->view('layout/footer');
	}

	public function singlevideo($id)
	{
		$data['isi'] = $this->post_model->get_siglevideo($id);
		$this->load->view('layout/header');
		$this->load->view('frontend/singlevideo',$data);
		$this->load->view('layout/footer');
	}
}
