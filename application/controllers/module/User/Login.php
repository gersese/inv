<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends GCA_Controller 
{
	const URL_DASHBOARD = 'index.php/module/dashboard/dashboard';
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
		$this->load->model('utils');

		if($this->utils->hasSession())
		{
			redirect(base_url() . self::URL_DASHBOARD);
		}
		else
		{
			$this->load->model('module/user/user_model');
			$this->load->model('utils/utils');
			$this->load->helper('url_helper');
		}
	}

	public function doLogin()
	{
		 $username = $this->input->post('username');
		 $password = $this->utils->encryptPassword($this->input->post('password'));
		 
		 $user = $this->user_model->validateUser($username, $password);

		 if($this->isValidated($user))
		 {

		 	$this->session->set_userdata(
		 		array(
		 			'user_id' => $user->id,
		 			'username' => $user->username,
		 			'user_role_id' => $user->user_role_id
		 		)
		 	);

			echo json_encode(array('validated' => true));
		 }
		 else
		 {
			echo json_encode(array('validated' => false));
		 }

	}

	function isValidated($user)
	{
		return $user != null;
	}
}
