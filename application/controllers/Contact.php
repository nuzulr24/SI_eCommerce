<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
      $this->load->model('admin');
	}

   public function index()
   {
	$this->cek_login();

	$this->load->library('form_validation');
	$this->form_validation->set_rules('telp', 'telp', 'trim|required');     
	
	if ($this->form_validation->run() == false) {
		$data['get'] = $this->admin->get_where('t_contact', ['id' => 1]);
		$this->template->admin('admin/contact',$data);
	} else {
		
		$data = [
			'telp' => htmlspecialchars($this->input->post('telp', true)),
		];

		$this->db->where('id', 1);
		$this->db->update('t_contact', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil diubah!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
		redirect('contact');
	}
   }

	function cek_login()
	{
		if (!$this->session->userdata('admin'))
		{
			redirect('login');
		}
	}
}
