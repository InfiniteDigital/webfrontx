<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Content-Type: application/json');
class Apwheel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('Ufa');
		$this->load->model('user_model');
	}

	public function index()
	{
		$res = array('status' => false, 'data' => 'No file');
		exit(json_encode($res));
	}

	public function table($user = null)
	{
		$result = null;
		if (!empty($user)) {
			$sql = "SELECT * FROM `wheel` WHERE user = '" . $user . "'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			$res = array('status' => true, 'data' => $result);
		} else {
			$res = array('status' => false, 'data' => $result);
		}
		exit(json_encode($res));
	}

	public function getrole($user = null)
	{
		if (!empty($user)) {
			$date = date("Y-m-d");

			$sql = "SELECT * FROM `wheel` WHERE user = '" . $user . "' AND date_new = '" . $date . "'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			$num = $query->num_rows();


			$status = true;
			if ($num > 0) {
				$status = false;
			}
			$ip = $this->input->ip_address();
			$data = [
				'user' => $user,
				'detail' => 'เปิดหน้าวงล้อ',
				'module' => 'Wheelspin',
				'ip_address' => $ip
			];
			$this->db->insert('report_activity', $data);

			$res = array('status' => $status, 'data' => (!empty($result) ? $result : null));
		} else {
			$res = array('status' => false, 'data' => 'No API');
		}
		exit(json_encode($res));
	}

	public function cccc()
	{
		$date = date("Y-m-d");

		$sql = "SELECT * FROM `wheel`";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		// strlen($result['data'])

		for ($x = 0; $x < 5; $x++) {
			$sql = "UPDATE wheel SET date_new = '" . $result[$x]['create_date'] . "' WHERE '" . $result[$x]['user'] . "'";
			$query = $this->db->query($sql);
		}


		$res = array('status' => true, 'msg' => $sql, 'result' => $result);
		echo (json_encode($res));
	}

	public function getrd($user = null, $id = null)
	{
		if (!empty($user)) {
			date_default_timezone_set('Asia/Bangkok');
			$date = date("Y-m-d");

			$sql = "SELECT * FROM `wheel` WHERE user = '" . $user . "' AND date_new = '" . $date . "'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			$num = $query->num_rows();


			$status = true;
			if ($num > 0) {
				$status = false;
			}

			$ip = $this->input->ip_address();
			$data = [
				'user' => $user,
				'detail' => 'หมุนวงล้อ',
				'module' => 'Wheelspin',
				'ip_address' => $ip
			];
			$this->db->insert('report_activity', $data);

			if ($status) {
				$num = rand(0, 9);
				$arr = array();
				$setting_w_type = $this->admin_model->setting_w_type();
				foreach ($setting_w_type as $v) {
					array_push($arr, $v['value']);
				}
				$ufa = $this->user_model->user_ufa($user);
				$username =  $ufa['username'];
				$rrr['status'] = ($arr[$num] > 0) ? false : true;
				$stats = false;
				if ($arr[$num] > 0) {
					$sql = "SELECT mwt.id, m.username, mwt.balance FROM member_wallet_transaction mwt LEFT JOIN member m ON mwt.member_id = m.id  WHERE mwt.member_id = " . $id . " AND mwt.sts = '1' ORDER BY mwt.id DESC LIMIT 1";
					$query = $this->db->query($sql);
					$resBalance = $query->result_array();
					$totalBalance = $resBalance[0]['balance'] + $arr[$num];
					$data = [
						"member_id" => $id,
						"amount" => intval($arr[$num]),
						"balance" => $totalBalance,
						"wallet_type" => 'bonus',
						"ref_table" => 'wheelspin',
						"ref_id" => 0,
						"created_at" => date('Y-m-d h:m:s'),
						"sts" => '2'
					];

					$this->db->insert('member_wallet_transaction', $data);
					$stats = true;
				}
				if ($stats) {
					$data = [
						'user' => $user,
						'credit' => $arr[$num],
						"create_date" => date('Y-m-d h:m:s'),
						'date_new' => $date,
						'sts' => 2
					];
					$this->db->insert('wheel', $data);
					$res = [
						'status' => true,
						'msg' => 'Add creadit success',
						'data' => [
							'num' => $num,
							'credit' => $arr[$num]
						],
					];
				} else {
					$res = array('status' => false, 'data' => 'Error Add credit');
				}
			} else {
				$res = array('status' => false, 'data' => 'ไม่สามารถรับได้');
			}
		} else {
			$res = array('status' => false, 'data' => 'No API');
		}
		exit(json_encode($res));
	}
}
