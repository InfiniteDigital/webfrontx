<?php
defined('BASEPATH') || exit('No direct script access allowed');
use Firebase\JWT\JWT;
class Lottokeynumber
{

    private $baseUrl = "https://wallet-keynumber.ddns.net";
    private $keyJwt = 'LOTTERY'; 

    public function getUrl(){
        return $this->baseUrl;
    }

    public function genAuthJwt($memberId){
        $payload = [
                    'id'=>$memberId,
					'exp' => strtotime("+2 hours"),
					'iat' => strtotime("now"),
				];
        return JWT::encode($payload, $this->keyJwt, 'HS256');
    }

    public function login($username,$password)
    {
        try {


        $url = $this->baseUrl . '/login-external';
        $data =  array("username"=> $username,"password"=> $password);
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Authorization: Bearer ".$this->genAuthJwt($username),
            "Content-Type: application/json",
        );
       
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data) );
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        
        curl_close($curl);
        return (array) json_decode($resp); 
    }catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
        }
    }
}
