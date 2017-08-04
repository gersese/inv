<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends GCA_Controller 
{

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
	public function __construct()
	{
		parent::__construct();
		$this->load->model('module/user/user_role_model');
		$this->load->model('utils/utils');
	}

	public function index()
	{
		$this->getUserRoles();
		$this->renderView('user_registration');
	}

	public function doRegister()
	{
		$this->load->model('module/user/user_model');
		
		$username = $this->input->post('username');
		$password = $this->utils->encryptPassword($this->input->post('password'));
		$retyped_password = $this->utils->encryptPassword($this->input->post('retyped_password'));

		$willRegister = true;
		$message = '';

		if($password != $retyped_password)
		{
			$willRegister = false; 
			$message = 'Passwords does not match.';
		}
		if($this->user_model->isUsernameTaken($username))
		{
			$willRegister = false;
			$message = 'Sorry, username is already taken by another user.';
		}

		if($willRegister)
		{
			$newUser = array(
				'username' => $username,
				'password' => $password,
				'user_role_id' => $this->input->post('user_role')
			);

			$this->user_model->registerUser($newUser);

			echo json_encode(array('success' => $willRegister));
		}
		else
		{
			echo json_encode(array(
				'success' => $willRegister,
				'message' => $message)
			);
		}

	}

	function getUserRoles()
	{
		$user_role_list = $this->user_role_model->getUserRoles();
		$user_role_view = array(count($user_role_list));

		for($i = 0; $i < count($user_role_list); $i++)
		{
			$user_role_view[$i] = '<option value="' .$user_role_list[$i]['user_role_id'] . '">' 
			. $user_role_list[$i]['user_role_description'] . '</option>';
		}

		$this->iterateHtmlOnView($user_role_view);
	}
}
