<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Firebase\JWT\JWT;

class Doc extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('bank_model');
		$this->load->model('admin_model');
		$this->load->helper('cookie');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('lottokeynumber');
		$this->load->library('walletauto');
	}

	public function index()
	{
		try {
			$res = scandir(FCPATH . 'application/views');
			$seting = $this->admin_model->result_setting();
			foreach ($res as $val) {
				$view = $seting['template_name'] . ".php";
				if (strpos($val, $view) !== false) {
					// return $this->load->view('customer_up');
					return $this->load->view($seting['template_name']."/"."doc/".$seting['template_name']);
				}
			}
			return $this->load->view('home');
		} catch (\Throwable $th) {
			print_r($th);
		}
	}

	public function home()
	{
		echo '<pre>';
		print_r('Test2');die;
		try {
			$res = scandir(FCPATH . 'application/views');
			$seting = $this->admin_model->result_setting();
			foreach ($res as $val) {
				$view = $seting['template_name'] . "-test.php";
				if (strpos($val, $view) !== false) {
					// return $this->load->view('customer_up');
					return $this->load->view($seting['template_name'].'-test');
				}
			}
			return $this->load->view('home');
		} catch (\Throwable $th) {
			print_r($th);
		}
		// return $this->load->view('heng168');
	}

}