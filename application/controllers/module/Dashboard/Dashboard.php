<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends GCA_Controller 
{
	const URL_LOGIN_PAGE = 'index.php/module/user/login';
	const URL_PREFERENCES_PAGE = 'index.php/module/preferences/preferences';

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
		$this->load->library('session');
		$this->load->model('utils');
		$this->load->helper('url');
	}

	public function index()
	{
		if($this->utils->hasSession())
		{
			$data['username'] = $this->session->userdata('username');
			$this->setViewParameters($data);
			$this->_renderHtmlMod('dashboard', 2, 1);
		}
		else
		{
			$this->session->sess_destroy();
			redirect(base_url() . self::URL_LOGIN_PAGE);
		}
	}

	public function signOut()
	{
		$this->session->sess_destroy();
		echo json_encode(array("login_url" => base_url() . self::URL_LOGIN_PAGE));
	}
}
