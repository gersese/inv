<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GCA_Controller extends CI_Controller {


	public function __construct(){
		parent::__construct();

		$this->getHeaderSrc();

		$this->__declare_global();
	}

	public function __declare_global(){
		$global = array();
		$global['imgpath'] = site_url('themes/images');
		
		$this->smr_frend->assign('global_dec', $global);
	}


	function getHeaderSrc(){
		$headers = $this->utils->getHeaders();
		
		$html_head = array();
		foreach($headers as $item){
			switch ($item['type']) {
				case 2:
					$html_head[] = '<link href="' . site_url("themes/". $item['path']) .'" rel="stylesheet" />';
					break;
				
				default:
					# item array js

					$html_head[] = '<script text="text/javascript" src="'.site_url("themes/". $item['path']).'"></script>';
					break;
			}
		}

		$this->smr_frend->assign('htmlhead', $html_head);
	}


	function _renderHtmlMod($module='', $page=1, $cols_sidebar=1){

		if(!$module){
			echo 'No module rendered';
		}

		$pageHtml = '';
		switch ($page) {
			case 2:
				$pageHtml = 'page/column-2-leftsidebar.tpl';
				break;
			
			default:
				$pageHtml = 'page/column-1.tpl';
				break;
		}
		$colsside = '';
		if($cols_sidebar==1){
			$colsside = 'page/column-2-contentcols1.tpl';
		}elseif($cols_sidebar==2){
			$colsside = 'page/column-2-contentcols2.tpl';
		}else{
			$colsside = 'page/column-2-contentcols1.tpl';
		}

		$this->smr_frend->assign('cols', $colsside);
		$this->smr_frend->assign('page', $pageHtml);
		$this->smr_frend->assign('index', 'module/'. $module . '/'. 'index.tpl');
		$this->smr_frend->view('core/core-page.tpl');
		
	}

	public function renderMain($page=1, $cols_sidebar=1)
	{
		$pageHtml = '';
		switch ($page) {
			case 2:
				$pageHtml = 'page/column-2-leftsidebar.tpl';
				break;
			
			default:
				$pageHtml = 'page/column-1.tpl';
				break;
		}
		$colsside = '';
		if($cols_sidebar==1){
			$colsside = 'page/column-2-contentcols1.tpl';
		}elseif($cols_sidebar==2){
			$colsside = 'page/column-2-contentcols2.tpl';
		}else{
			$colsside = 'page/column-2-contentcols1.tpl';
		}

		$this->smr_frend->assign('cols', $colsside);
		$this->smr_frend->assign('page', $pageHtml);
		$this->smr_frend->view('core/core-page.tpl');
		
	}

	public function renderView($module)
	{
		if(!$module){
			echo 'No module rendered';
			return;
		}

		$this->smr_frend->assign('page', 'page/column-1.tpl');
		$this->smr_frend->assign('index', 'module/'. $module . '/'. 'index.tpl');
		$this->smr_frend->view('core/core-page.tpl');
	}

	public function setViewParameters($parameters)
	{
		foreach($parameters as $key => $value)
		{
			$this->smr_frend->assign($key, $value);
		}
	}

	public function iterateHtmlOnView($htmlArray)
	{
		$this->smr_frend->assign('html_array', $htmlArray);
	}
}