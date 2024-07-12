<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Content-Type: application/json');
class Apibackend extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('Ufa');
		$this->load->model('user_model');
		$this->load->library('scb');
		$this->load->library('LottoHouse');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$res = array('status' => false, 'data' => 'No file');
		exit(json_encode($res));
	}

	private function getRequestHeaders()
	{
		$headers = array();
		foreach ($_SERVER as $key => $value) {
			if (substr($key, 0, 5) <> 'HTTP_') {
				continue;
			}
			$header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
			$headers[$header] = $value;
		}
		$hh = '';
		foreach ($headers as $header => $value) {
			if ($header == 'Authorization') {
				$hh = $value;
				break;
			}
		}
		$resAuth = explode(" ", $hh);
		$sql = "SELECT * FROM `log_token` WHERE token = '" . $resAuth[1] . "'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		$res = false;
		if ($result) {
			$res = true;
		} else {
			$res = false;
		}

		return $res;
	}

	public function agent_info()
	{
		$result = $this->ufa->agent_info();
		$res = array('status' => true, 'msg' => 'Success', 'data' => $result);

		exit(json_encode($res));
	}

	public function view_credit($user = null)
	{
		$token = $this->getRequestHeaders();
		if ($token) {
			$res = array('status' => true, 'msg' => 'Success', 'data' => $this->ufa->get_Balance($user));
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}

		exit(json_encode($res));
	}

	public function view_Turnover($user = null)
	{
		$token = $this->getRequestHeaders();
		if ($token) {
			$check_turns = $this->ufa->TurnOverUser($user, date('m/d/Y'), date('m/d/Y'));
			$res = array('status' => true, 'msg' => 'Success', 'data' => $check_turns);
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}
		exit(json_encode($res));
	}

	public function add_credit()
	{
		$token = $this->getRequestHeaders();
		if ($token) {
			$username = $this->input->post('username');
			$val = $this->input->post('amount');
			$user = $this->input->post('admin');
			$ip = $this->input->post('ip');
			$datasend = "";
			$res = $this->ufa->Deposit($username, $val);
			date_default_timezone_set('Asia/Bangkok');
			$datasend .= "\n👉เครดิตเติมมือ By ADMIN👈";
			$datasend .= "\nโดย Admin ชื่อ => {$user}";
			$datasend .= "\nเติมให้สมาชิก => " . $username;
			$datasend .= "\nจำนวนเงิน => {$val} บาท";
			$datasend .= "\nIp => {$ip}";
			$datasend .= "\nTime => " . date('Y-m-d H:i:s', time());
			$staff_data = [
				"username" => $user,
				"type" => 0,
				"detail" => "เติมเงินให้ " . $username . " , จำนวน " . $val . " บาท || ประเภท : Manual"
			];
			$transaction_manual = [
				"member_username" => $username,
				"credit" => $val,
				"cr_by" => $user,
				"module" => 'Deposit'
			];
			if ($res['status']) {
				$this->notify_sent($datasend, 3);
				$this->admin_model->staff_h_insert($staff_data);
				$this->admin_model->transaction_manual($transaction_manual);
				$res = array('status' => true, 'msg' => 'Success');
			} else {
				$res = array('status' => false, 'msg' => 'Add Credit Fail');
			}
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}
		exit(json_encode($res));
	}

	public function minus_credit()
	{
		$token = $this->getRequestHeaders();
		if ($token) {
			$username = $this->input->post('username');
			$val = $this->input->post('amount');
			$user = $this->input->post('admin');
			$ip = $this->input->post('ip');
			$datasend = "";
			$res =  $this->ufa->Withdraw($username, $val);
			date_default_timezone_set('Asia/Bangkok');
			$datasend .= "\n👉ถอนเครดิตมือ By ADMIN👈";
			$datasend .= "\nโดย Admin ชื่อ => {$user}";
			$datasend .= "\nเถอินให้สมาชิก => " . $username;
			$datasend .= "\nจำนวนเงิน => {$val} บาท";
			$datasend .= "\nIp => {$ip}";
			$datasend .= "\nTime => " . date('Y-m-d H:i:s', time());
			$staff_data = [
				"username" => $user,
				"type" => 0,
				"detail" => "ถอนเงินให้ " . $username . " , จำนวน " . $val . " บาท || ประเภท : Manual"
			];
			$transaction_manual = [
				"member_username" => $username,
				"credit" => $val,
				"cr_by" => $user,
				"module" => 'Withdraw'
			];
			if ($res['status']) {
				$this->notify_sent($datasend, 3);
				$this->admin_model->staff_h_insert($staff_data);
				$this->admin_model->transaction_manual($transaction_manual);
				$res = array('status' => true, 'msg' => 'Success');
			} else {
				$res = array('status' => false, 'msg' => 'Withdraw Fail');
			}
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}
		exit(json_encode($res));
	}

	public function transfer_scb()
	{
		$token = $this->getRequestHeaders();

		if ($token) {

			$accnum = $this->input->post('accnum');
			$bank = $this->input->post('bank');
			$amount = $this->input->post('amount');
			$id = $this->input->post('id');
			$ip = $this->input->post('ip');
			$admin = $this->input->post('admin');
			$username = $this->input->post('username');
			$usernameUFA = $this->input->post('usernameUFA');
			$bank_name = $this->input->post('bank_name');
			$secert = $this->input->post('secert');
			$Balance = $this->ufa->get_Balance($usernameUFA);
			$money_ufa =  $Balance['balance'];
			if ($secert == 'CUfL4levur') {
				$bb = $this->admin_model->bank();
				$scb = [
					"accnum" => $bb['accnum'], //เลขบช
					"deviceid" => $bb['username'], //deviceid
					"pin" => $bb['password'], ////api_refresh
				];
				$this->scb->SetLogin($scb['deviceid'], $scb['pin'], $scb['accnum']);
				$tranfer = $this->scb->Transfer($accnum, $bank, $amount);

				$jsde = json_decode($tranfer, true);
				if ($jsde["status"]["code"] == 1000) {
					$d = [
						"id" => $id,
						"stats" => 0,
					];
					$this->admin_model->update_stats_w($d);
					$staff_data = [
						"username" => $admin,
						"type" => 0,
						"detail" => "อนุมัติการถอนเงินออโต้ให้ " . $username . " จำนวน " . $amount . " บาท"
					];
					$this->admin_model->staff_h_insert($staff_data);
					$res = array('status' => true, 'msg' => 'Success', 'data' => $jsde["status"]["description"]);
					$datasend = "";
					$datasend .= "\n✅ อนุมัติการถอนเงินให้ ✅";
					$datasend .= "\nสมาชิก => {$usernameUFA}";
					$datasend .= "\nธนาคารลูกค้า =>{$bank_name} {$accnum}";
					$datasend .= "\nจำนวนเงินที่ถอน => {$amount} บาท";
					$datasend .= "\nยอดเงินลูกค้าคงเหลือ => {$money_ufa} บาท";
					$datasend .= "\nสถานะ => ดำเนินการเรียบร้อยแล้ว \nโดย : {$admin}";
					$datasend .= "\nIP => {$ip}";
					$this->notify_sent($datasend, 4);
				} else {
					$res = array('status' => false, 'msg' => $jsde["status"]["description"]);
				}
			} else {
				$res = array('status' => false, 'msg' => 'Code Error');
			}
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}
		exit(json_encode($res));
	}

	private function notify_sent($message, $tt = 1)
	{
		$setting = $this->admin_model->result_setting();
		$token =  "";
		if ($tt == 1) {
			$token =  $setting['token_line'];
		} else if ($tt == 2) {
			$token =  $setting['token_line_game'];
		} else if ($tt == 3) {
			$token =  $setting['token_line_depo'];
		} else if ($tt == 4) {
			$token =  $setting['token_line_with'];
		} else {
			$token =  $setting['token_line'];
		}

		// $token =  $setting['token_line']; //ใส่Token ที่copy เอาไว้
		$str = $message; //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร

		$res = $this->notify_message($str, $token);
		//print_r($res);
	}
	private  function notify_message($message, $token)
	{
		$queryData = array('message' => $message);
		$queryData = http_build_query($queryData, '', '&');
		$headerOptions = array(
			'http' => array(
				'method' => 'POST',
				'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
					. "Authorization: Bearer " . $token . "\r\n"
					. "Content-Length: " . strlen($queryData) . "\r\n",
				'content' => $queryData
			),
		);
		$context = stream_context_create($headerOptions);
		$result = file_get_contents(LINE_API, FALSE, $context);
		$res = json_decode($result);
		return $res;
	}

	private function handleRegisterLottoHouse($username)
	{
		$resUserAuth = $this->admin_model->getUserAuthApiLottoHouse();
		if ($resUserAuth) {
			$token = $this->lottohouse->authLogin($resUserAuth[0]['username'], $resUserAuth[0]['password']);
			$data = [
				"mode" => "create",
				"username" => $username
			];
			$resRegister = $this->lottohouse->register($token['token'], $data);
			if ($resRegister['status'] == 200) $resRegister['result'] = (array) $resRegister['result'];
			return $resRegister;
		} else {
			return false;
		}
	}



	public function register_manual()
	{
		$token = $this->getRequestHeaders();

		if ($token) {

			$username = $this->input->post('username');
			$data = [
				"username"     => $this->input->post('username'),
				"password"     => $this->input->post('password'),
				"accnum"       => $this->input->post('bank_number'),
				"name"         => $this->input->post('fname'),
				"line"         => $this->input->post('line'),
				"bank"         => $this->input->post('bank_name'),
				"IP"         => $this->input->post('ip'),
				"cr_prog"      => 'Manual'
			];

			$usersgen = $this->user_model->getall_usergen();

			$pass = $usersgen->password;
			// $updateused = $this->user_model->usergen_update($usersgen->id);
			$updateused = $this->user_model->usergen_update($usersgen->id, $this->input->post('username'));
			$new_user_ufa = $usersgen->username;
			$new_pass_ufa = $pass;
			$res_user = new stdClass();
			$res_user->username = $this->input->post('username');
			$res_user->newpass = $this->input->post('password');
			$resUserLottoHouse = $this->handleRegisterLottoHouse($this->input->post('username'));

			// print_r($res_user);die;
			if (empty($res_user) || empty($res_user->username) || empty($new_pass_ufa)) {
				exit(json_encode(['status' => false, 'msg' => $usersgen]));
			}

			$this->user_model->add_mem($data);
			$this->user_model->add_ufa(['member_username' => $this->input->post('username'), "username" => $new_user_ufa, "password" => $new_pass_ufa, "type_api" => "ufa"]);
			if ($resUserLottoHouse['status_code'] == 200) {
				$this->user_model->add_ufa(['member_username' => $this->input->post('username'), "username" => $resUserLottoHouse['result']['username'], "password" => $resUserLottoHouse['result']['password'], "type_api" => "lottohouse"]);
			}
			// $pass = $res_user->username;

			// $res_user = $this->ufa->AddMember($this->input->post('username'));
			// print_r($res_user);die;
			if (empty($res_user) || empty($res_user->username) || empty($res_user->newpass)) {
				$res = array('status' => false, 'msg' => $res_user);
			}			
			$pass = $res_user->username;

			$res = array('status' => true, 'msg' => 'สมัครสมาชิกสำเร็จ');
			$this->notify_sent("\n🔥แจ้งเตือนสมัครสมาชิก🔥 \nผู้ใช้งาน : {$data['username']}\nเลขบัญชี : {$data['accnum']}\nธนาคาร : {$data['bank']}\nชื่อบัญชี : {$data['name']}\nไอดีไลน์ : {$data['line']}\nUserUFA $pass", 1);
			$user_session = $this->input->post('admin');
			$staff_data = [

				"username" => $user_session,

				"type" => 0,

				"detail" => "เพิ่มสมาชิก ผู้ใช้งาน " . $username . " || ประเภท : Manual"

			];

			$this->admin_model->staff_h_insert($staff_data);
			$res = array('status' => true, 'msg' => 'Success');
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}
		exit(json_encode($res));
	}

	public function check_scb()
	{
		$token = $this->getRequestHeaders();

		if ($token) {
			$bb = $this->admin_model->bank();
			$scb = [
				"accnum" => $bb['accnum'], //เลขบช
				"deviceid" => $bb['username'], //deviceid
				"pin" => $bb['password']
			];
			$this->scb->SetLogin($scb['deviceid'], $scb['pin'], $scb['accnum']);
			$result = $this->scb->GetBalance();
			$res = array('status' => true, 'msg' => 'Success', 'data' => $result);
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}
		exit(json_encode($res));
	}

	public function auto_login()
	{
		$auto_login = $_POST['auto_login'];
		$VIEWSTATEGENERATOR = $_POST['VIEWSTATEGENERATOR'];
		$VIEWSTATE = $_POST['VIEWSTATE'];
		$EVENTVALIDATION = $_POST['EVENTVALIDATION'];

		$sql = "UPDATE setting_game SET auto_login = '$auto_login', VIEWSTATEGENERATOR = '$VIEWSTATEGENERATOR', VIEWSTATE = '$VIEWSTATE', EVENTVALIDATION = '$EVENTVALIDATION' WHERE id = 1";
		$query = $this->db->query($sql);
		$res = array('status' => true);
		exit(json_encode($res));
	}



	public function add_credit_ufa()
	{
		$code =  $this->input->post('code');
		if ($code == "8483Auto") {
			$username = $this->input->post('username');
			$val = $this->input->post('amount');
			$res = $this->ufa->Deposit($username, $val);
			date_default_timezone_set('Asia/Bangkok');
			if ($res['status']) {
				$res = array('status' => true, 'msg' => 'Success');
			} else {
				$res = array('status' => false, 'msg' => 'Add Credit Fail', 'error' => $res);
			}
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}
		exit(json_encode($res));
	}

	public function minus_creditt_ufa()
	{
		$code =  $this->input->post('code');
		if ($code == "8483Auto") {
			$username = $this->input->post('username');
			$val = $this->input->post('amount');
			$res = $this->ufa->Withdraw($username, $val);
			date_default_timezone_set('Asia/Bangkok');
			if ($res['status']) {
				$res = array('status' => true, 'msg' => 'Success');
			} else {
				$res = array('status' => false, 'msg' => 'Minus Credit Fail', 'error' => $res);
			}
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}
		exit(json_encode($res));
	}

	public function view_credit_ufa()
	{
		$code =  $this->input->post('code');
		$user =  $this->input->post('user');
		if ($code == "8483Auto") {
			$res = array('status' => true, 'msg' => 'Success', 'data' => $this->ufa->get_Balance($user));
		} else {
			$res = array('status' => false, 'msg' => 'Unauthorized');
		}

		exit(json_encode($res));
	}
	public function check_turnover_user($user = null)
	{
		$date = $_POST['date'];
		$dateEnd = $_POST['dateEnd'];
		if (!$dateEnd) {
			$dateEnd = $date;
		}
		$check_turns = $this->ufa->TurnOverAuto('', $date, $dateEnd);
		if ($check_turns) {
			foreach ($check_turns as $key => $value) {
				$member_id = $this->user_model->getMemberIdWithUfa($key);
				$check_turns[$key]['member_id'] = !empty($member_id->id) ? $member_id->id : null;
			}
			echo json_encode(['status' => true, 'msg' => $check_turns, 'date' => $date, 'dateEnd' => $dateEnd]);
		} else {
			echo json_encode(['status' => false, 'msg' => $check_turns, 'date' => $date, 'dateEnd' => $dateEnd]);
		}
	}

	public function check_turnover_user_test($user = null)
	{
		$date = '02/01/2023';
		$dateEnd = '02/14/2023';
		if (!$dateEnd) {
			$dateEnd = $date;
		}
		$check_turns = $this->ufa->TurnOverAuto('', $date, $dateEnd);
		if ($check_turns) {
			foreach ($check_turns as $key => $value) {
				$member_id = $this->user_model->getMemberIdWithUfa($key);
				$check_turns[$key]['member_id'] = !empty($member_id->id) ? $member_id->id : null;
			}
			echo json_encode(['status' => true, 'msg' => $check_turns, 'date' => $date, 'dateEnd' => $dateEnd]);
		} else {
			echo json_encode(['status' => false, 'msg' => $check_turns, 'date' => $date, 'dateEnd' => $dateEnd]);
		}
	}

	public function check_turnover_user1($user = null)
	{
		$date = $_POST['date'];
		$dateEnd = $_POST['dateEnd'];
		$check_turns = $this->ufa->TurnOver1('', $date, $dateEnd);
		echo json_encode(['status' => true, 'msg' => $check_turns, 'date' => $date]);
	}

	public function view_Turnover_ufa($user = null)
	{
		$check_turns = $this->ufa->TurnOverUser($user, date('m/d/Y'), date('m/d/Y'));
		if ($check_turns) {
			$res = array('status' => true, 'msg' => 'Success', 'data' => $check_turns);
		} else {
			$res = array('status' => false, 'msg' => 'No Turnover', 'data' => 0);
		}

		exit(json_encode($res));
	}

	public function checkWinLossUser($user = null)
	{
		$date = $_POST['date'];
		$dateEnd = $_POST['dateEnd'];
		$username = $_POST['username'];
		$check_turns = $this->ufa->WinLossUser($username, $date, $dateEnd);
		if ($check_turns) {
			$res = array('status' => true, 'msg' => 'Success', 'data' => $check_turns);
		} else {
			$res = array('status' => false, 'msg' => 'No Turnover', 'data' => 0);
		}
		exit(json_encode($res));
	}

	public function check_turnover_user_array($user = null)
	{
		$date = $_POST['date'];
		$dateEnd = $_POST['dateEnd'];
		if (!$dateEnd) {
			$dateEnd = $date;
		}
		$check_turns = $this->ufa->TurnOverAutoArray('', $date, $dateEnd);
		if ($check_turns) {
			echo json_encode(['status' => true, 'msg' => $check_turns, 'date' => $date, 'dateEnd' => $dateEnd]);
		} else {
			echo json_encode(['status' => false, 'msg' => $check_turns, 'date' => $date, 'dateEnd' => $dateEnd]);
		}
	}

	public function __destruct()
	{
		// Last Process
		$this->db->close();
		
	}
}
