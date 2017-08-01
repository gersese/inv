<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends GCA_Controller 
{
	const HASHING_ALGORITHM = 'sha256';
	const LOGIN_SUCCESS_REDIRECT = 'index.php/module/dashboard/dashboard';

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->_renderHtmlMod('login');
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('module/user/user_model');
		$this->load->helper('url_helper');
	}

	public function doLogin()
	{
		 $username = $this->input->post('username');
		 $password = $this->encryptPassword($this->input->post('password'));
		 
		 $user = $this->user_model->validateUser($username, $password);

		 if($this->isValidated($user))
		 {
		 	$this->load->library('session');
		 	$this->session->user = $user;
			echo json_encode(array('validated' => true));
		 }
		 else
		 {
		 	$data['message'] = 'Invalid login';
			echo json_encode(array('validated' => false));
		 }

	}

	function encryptPassword($password)
	{
		return hash(self::HASHING_ALGORITHM, md5($password));
	}

	function isValidated($user)
	{
		return $user != null;
	}
}
