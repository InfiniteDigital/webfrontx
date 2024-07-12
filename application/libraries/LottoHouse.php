<?php
defined('BASEPATH') || exit('No direct script access allowed');
class LottoHouse
{
    private $baseUrl = "";
	
	public function __construct()
	{
		$this->CI = get_instance();
		$this->CI->load->model('admin_model');
		$setting = $this->CI->admin_model->result_setting();
		$this->baseUrl = $setting['domain_system_lotto'];
	}    

    

    public function authLogin($username, $password)
    {
        $url = $this->baseUrl.'/api/authication';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
            "Content-Type: application/x-www-form-urlencoded", 
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $data = "username=$username&password=".urlencode($password);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        return (array) json_decode($resp);  
    }

    public function register($auth,$dataReq){
        $url = $this->baseUrl.'/api/register';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
            "Content-Type: application/x-www-form-urlencoded",
            "Authorization: Bearer ".$auth 
        );

        $data = "mode=".$dataReq['mode']."&username=".$dataReq['username'];
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        
        return (array) json_decode($resp); 
    }

}
