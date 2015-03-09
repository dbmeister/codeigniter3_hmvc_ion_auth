<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
      $data['title'] = 'Welcome';
      $data['page_title'] = 'Welcome';
      $data['module'] = 'welcome';
      $data['view_file'] = 'welcome_message';
      
      echo Modules::run('templates', $data);
    
//		$this->load->view('welcome_message');
	}
  
	public function user()
	{
      if (!$this->ion_auth->logged_in())
      {
        redirect('auth/login');
      }
      
      $data['title'] = 'Welcome User';
      $data['page_title'] = 'Welcome User';
      $data['module'] = 'welcome';
      $data['view_file'] = 'welcome_user';
      
      echo Modules::run('templates', $data);
    
//		$this->load->view('welcome_message');
	}
  
	public function admin()
	{
      $data['title'] = 'Welcome Admin';
      $data['page_title'] = 'Welcome Admin';
      $data['module'] = 'welcome';
      $data['view_file'] = 'welcome_admin';
      
      if (!$this->ion_auth->logged_in())
      {
        $data['message'] = 'You must be logged in to view this page';
        $this->session->set_flashdata('message', $data['message']);
        redirect('auth/login');
      }
      elseif (!$this->ion_auth->is_admin())
      {
        $data['message'] = 'Administrator rights are required to view this page';
        $data['title'] = 'Insufficient Rights';
        $data['page_title'] = 'Insufficient Rights';
        $data['module'] = 'auth';
        $data['view_file'] = 'insufficient_rights';
      }
      else
      {
      $data['title'] = 'Welcome Admin';
      $data['page_title'] = 'Welcome Admin';
      $data['module'] = 'welcome';
      $data['view_file'] = 'welcome_admin';
      }
      echo Modules::run('templates', $data);
    
//		$this->load->view('welcome_message');
	}
}
