<?php
defined('BASEPATH') || exit('No direct script access allowed');
use Firebase\JWT\JWT;
class Walletauto
{
    private $baseUrl = "http://autowallet-back.ddns.net";
    private $keyJwt = 'uoHCFT7VeYXzVjqqtNc4';

    public function genAuthJwt($memberId){
        $payload = [
                    'id'=>$memberId,
					'exp' => strtotime("+2 hours"),
					'iat' => strtotime("now"),
				];
        return JWT::encode($payload, $this->keyJwt, 'HS256');
    }

    public function creditLotto($memberId){
        $this->genAuthJwt($memberId);
        $url = $this->baseUrl.'/ApiCreditLotto';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
            "Content-Type: application/json",
            "Authorization: Bearer ".$this->genAuthJwt($memberId)
        );

        $data = '{"app_type": "lotto","member_id":"'.$memberId.'"}';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, TRUE);
        $resp = curl_exec($curl);
        curl_close($curl);
        
        return (array) json_decode($resp); 
    }
}