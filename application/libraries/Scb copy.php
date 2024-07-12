<?php
error_reporting(0);
/*NEW API CLASS BY BOTTEEX */
class Scb
{
    private $deviceId = 'EC0400F4-6B4E-45B8-A104-F36EC13EC75E';
    private $pin      = '10000';
    private $accnum   = '4340760932';
    private $versionScb = 'Android/11;FastEasy/71.2/7422';
    // private $api_pin  = 'http://103.141.68.37:3000/pin/encrypt';scb.mskids.me
    private $api_pin  = 'https://scb.mskids.me/pin/encrypt';
    public function Curl($method, $url, $header, $data, $cookie)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->versionScb);
        //curl_setopt($ch, CURLOPT_USERAGENT, 'okhttp/3.8.0');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        //curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        if ($cookie) {
            curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
            curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        }
        return curl_exec($ch);
    }

    public function SetLogin($deviceId, $pin, $accnum)
    {
        $this->deviceId = $deviceId;
        $this->pin      = $pin;
        if (strlen($accnum) != 10) {
            echo '10 digital !!';
        }
        $this->accnum = $accnum;
    }

    public function Login($refea = null,$authhh=null)
    {



        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL            => 'https://fasteasy.scbeasy.com:8443/v3/login/preloadandresumecheck',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_HEADER         => 1,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'POST',
            CURLOPT_POSTFIELDS     => '{"deviceId":"' . $this->deviceId . '","jailbreak":"0","tilesVersion":"39","userMode":"INDIVIDUAL"}',
            CURLOPT_HTTPHEADER     => array(
                'Accept-Language: th',
                'scb-channel: APP',
                'user-agent: ' . $this->versionScb,
                'Content-Type:  application/json; charset=UTF-8',
                'Host:  fasteasy.scbeasy.com:8443',
                'Connection:  close',
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        //print_r($response);die();

        preg_match_all('/(?<=Api-Auth: ).+/', $response, $Auth);
        $Auth = $Auth[0][0];

        if ($Auth == "") {
            exit(json_encode(array("status" => 500, "error" => true, "message" => "Auth error")));
        }

        $curl1 = curl_init();

        curl_setopt_array($curl1, array(
            CURLOPT_URL            => 'https://fasteasy.scbeasy.com/isprint/soap/preAuth',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'POST',
            CURLOPT_POSTFIELDS     => '{"loginModuleId":"PseudoFE"}',
            CURLOPT_HTTPHEADER     => array(
                'Api-Auth: ' . $Auth,
                'Content-Type: application/json',
            ),
        ));

        $response1 = curl_exec($curl1);
        //print_r($response1);die;
        curl_close($curl1);

        $data = json_decode($response1, true);

        $hashType     = $data['e2ee']['pseudoOaepHashAlgo'];
        $Sid          = $data['e2ee']['pseudoSid'];
        $ServerRandom = $data['e2ee']['pseudoRandom'];
        $pubKey       = $data['e2ee']['pseudoPubKey'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL            => $this->api_pin,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS     => "Sid=" . $Sid . "&ServerRandom=" . $ServerRandom . "&pubKey=" . $pubKey . "&pin=" . $this->pin . "&hashType=" . $hashType,
            CURLOPT_HTTPHEADER     => array(
                "Content-Type: application/x-www-form-urlencoded",
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        if (!empty($refea)) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL            => 'https://fasteasy.scbeasy.com/v1/fasteasy-login',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => '',
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_HEADER         => 1,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => 'post',
                CURLOPT_POSTFIELDS     => '{"deviceId":"' . $this->deviceId . '","pseudoPin":"' . $response . '","pseudoSid":"' . $Sid . '"}',
                CURLOPT_HTTPHEADER     => array(
                    'Api-Auth:  ' . $Auth,
                    'Api-Refresh:  ' . $refea,
                    'user-agent: ' . $this->versionScb,
                    'Host: fasteasy.scbeasy.com',
                    'Content-Type: application/json',
                ),
            ));
            $response_auth = curl_exec($curl);
            // print_r($response_auth);
            curl_close($curl);
            preg_match_all('/(?<=Api-Auth:).+/', $response_auth, $Auth_result);
            $Auth1 = $Auth_result[0][0];
            preg_match_all('/(?<=Api-Refresh:).+/', $response_auth, $Refesss);
            $Refesss1 = $Refesss[0][0];
            if ($Auth1 == "") {
                exit(json_encode(array("status" => 501, "error" => true, "message" => "Auth error2")));
                exit();
            } else {
                return (object)["status" => 200, "auth_token" => $Auth1, "refesh" => $Refesss1];
            }
        } else {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL            => 'https://fasteasy.scbeasy.com/v1/fasteasy-login',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => '',
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_HEADER         => 1,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => 'post',
                CURLOPT_POSTFIELDS     => '{"deviceId":"' . $this->deviceId . '","pseudoPin":"' . $response . '","pseudoSid":"' . $Sid . '"}',
                CURLOPT_HTTPHEADER     => array(
                    'Api-Auth:  ' . $Auth,
                    'user-agent: ' . $this->versionScb,
                    'Host: fasteasy.scbeasy.com',
                    'Content-Type: application/json',
                ),
            ));
            $response_auth = curl_exec($curl);
            // print_r($response_auth);
            curl_close($curl);
            preg_match_all('/(?<=Api-Auth:).+/', $response_auth, $Auth_result);
            $Auth1 = $Auth_result[0][0];
            preg_match_all('/(?<=Api-Refresh:).+/', $response_auth, $Refesss);
            $Refesss1 = $Refesss[0][0];
            if ($Auth1 == "") {
                exit(json_encode(array("status" => 501, "error" => true, "message" => "Auth error1")));
                exit();
            } else {
                return (object)["status" => 200, "auth_token" => $Auth1, "refesh" => $Refesss1];
            }
        }
    }

    public function GetBalance()
    {
        $curl = curl_init();
        $ssss = $this->Login('3c9b8c34-d1d6-496c-96bc-29591929d2ae','97c977ec-b509-4660-af8a-7c45532dd411');
        curl_setopt_array($curl, array(
            CURLOPT_URL            => 'https://fasteasy.scbeasy.com/v2/deposits/summary',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'POST',
            // CURLOPT_HEADER         => 1,
            CURLOPT_POSTFIELDS     => '
            {"depositList":
                [{"accountNo":"' . $this->accnum . '"}],
                "numberRecentTxn":2,
                "tilesVersion":"39"}',
            CURLOPT_HTTPHEADER     => array(
                'Api-Auth:  '.$ssss->auth_token,
                // 'Api-Refresh:  '.$ssss->refesh,
                // 'Api-Auth:  0cb8498f-e393-4fa9-95d9-6a0f06e3278a',
                // 'Api-Refresh:  3c9b8c34-d1d6-496c-96bc-29591929d2ae',
                'Content-Type:  application/json;charset=UTF-8',
            ),
        ));

        $response = curl_exec($curl);
        // echo '<pre>';
        // print_r($response);
        // print_r($ssss);
        curl_close($curl);

        $result = json_decode($response, true);

        $data = array('result' => $result['totalAvailableBalance'], 'sssss' => $ssss);
        return json_encode($data);
    }

    public function fetchBillers()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL            => 'https://fasteasy.scbeasy.com/v1/topup/billers/8/range',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_HTTPHEADER     => array(
                'Connection: Keep-Alive',
                'Accept-Encoding: gzip',
                'Accept-Language: th',
                'scb-channel: APP',
                'user-agent: ' . $this->versionScb,
                'Api-Auth:  ' . $this->Login()["auth_token"],
                'Content-Type:  application/json;charset=UTF-8',
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($response);
        return $result;
    }

    public function tranferTruewallets($data = null)
    {
        echo '<pre>';
        print_r($data);
        if (!empty($data)) {
            $curl = curl_init();
            $json = (object)[
                'annotation' => '',
                'note' => 'TOPUP',
                'serviceNumber' => $data->phoneNumber,
                'pmtAmt' => $data->amount,
                'billerId' => 8,
                'depAcctIdFrom' => $data->accountNo,
            ];
            curl_setopt_array($curl, array(
                CURLOPT_URL            => 'https://fasteasy.scbeasy.com/v2/topup/billers/8/additionalinfo',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => "",
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => "POST",
                CURLOPT_POSTFIELDS     => json_encode($json),
                CURLOPT_HTTPHEADER     => array(
                    'Connection: Keep-Alive',
                    'Accept-Encoding: gzip',
                    'Accept-Language: th',
                    'scb-channel: APP',
                    'user-agent: ' . $this->versionScb,
                    'Api-Auth:  ' . $this->Login()["auth_token"],
                    'Host: fasteasy.scbeasy.com',
                    'Content-Type: application/json; charset=UTF-8',
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            $result = json_decode($response);
            echo '<pre>';
            print_r($result);
            return $result;
        } else {
            return false;
        }
    }

    public function TopupTruewallets($additionalInfo, $data)
    {
        if (!empty($additionalInfo)) {
            $curl = curl_init();
            $json = (object)[
                'depAcctIdFrom' => $data->accountNo,
                'billerId' => 8,
                'mobileNumber' => $data->phoneNumber,
                'misc1' => '',
                'misc2' => '',
                'note' => '',
                'pmtAmt' => $data->amount,
                'feeAmt' => 0.0,
                'serviceNumber' => $data->phoneNumber,
                'transactionToken' => $additionalInfo->transactionToken,
                'billRef1' => $additionalInfo->refNo1,
                'billRef2' => $additionalInfo->refNo2,
                'billRef3' => $additionalInfo->refNo3,
            ];
            curl_setopt_array($curl, array(
                CURLOPT_URL            => 'https://fasteasy.scbeasy.com/v2/topup',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => "",
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => "POST",
                CURLOPT_POSTFIELDS     => json_encode($json),
                CURLOPT_HTTPHEADER     => array(
                    'Connection: Keep-Alive',
                    'Accept-Encoding: gzip',
                    'Accept-Language: th',
                    'scb-channel: APP',
                    'user-agent: ' . $this->versionScb,
                    'Api-Auth:  ' . $this->Login()["auth_token"],
                    'Host: fasteasy.scbeasy.com',
                    'Content-Type: application/json; charset=UTF-8',
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            $result = json_decode($response);
            echo '<pre>';
            print_r($result);
            return $result;
        } else {
            return false;
        }
    }

    public function getTransaction()
    {
        $date_now = date("Y-m-d", strtotime(' -5 day'));
        $date_new = date('Y-m-d',);
        $curl     = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL            => "https://fasteasy.scbeasy.com/v2/deposits/casa/transactions",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS     => "{\"accountNo\":\"" . $this->accnum . "\",\"endDate\":\"" . $date_new . "\",\"pageNumber\":\"1\",\"pageSize\":20,\"productType\":\"2\",\"startDate\":\"" . $date_now . "\"}",
            CURLOPT_HTTPHEADER     => array(
                'Api-Auth: ' . $this->Login()["auth_token"],
                'Accept-Language: th',
                'Content-Type: application/json; charset=UTF-8',
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $result = json_decode($response, true);

        $check = $result['status']['description'];

        if ($check == 'ไม่สามารถทำรายการทางการเงินได้ในขณะนี้') {
            $data = array('result' => 'ไม่สามารถทำรายการทางการเงินได้ในขณะนี้');
            return json_encode($data);
        } else {
            $data = array('result' => $result['data']['txnList']);
            return json_encode($data);
        }
    }
    public function getTransaction1($t = 1, $day = 4)
    {
        $date_now = date("Y-m-d", strtotime(' -' . $day . ' day'));
        $date_new = date('Y-m-d');
        $curl     = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL            => "https://fasteasy.scbeasy.com/v2/deposits/casa/transactions",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS     => "{\"accountNo\":\"" . $this->accnum . "\",\"endDate\":\"" . $date_new . "\",\"pageNumber\":\"" . $t . "\",\"pageSize\":20,\"productType\":\"2\",\"startDate\":\"" . $date_now . "\"}",
            CURLOPT_HTTPHEADER     => array(
                'Api-Auth: ' . $this->Login()["auth_token"],
                'Accept-Language: th',
                'Content-Type: application/json; charset=UTF-8',
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $result = json_decode($response, true);

        $check = $result['status']['description'];

        if ($check == 'ไม่สามารถทำรายการทางการเงินได้ในขณะนี้') {
            $data = array('result' => 'ไม่สามารถทำรายการทางการเงินได้ในขณะนี้');
            return json_encode($data);
        } else {
            $data = array('result' => $result['data']['txnList']);
            return json_encode($data);
        }
    }

    public function Verify($accountTo, $accountToBankCode, $amount)
    {
        if ($accountToBankCode == "014") {
            $transferType = "3RD";
        } else {
            $transferType = "ORFT";
        }

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL            => "https://fasteasy.scbeasy.com/v2/transfer/verification",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS     => '{"accountFrom":"' . $this->accnum . '","accountFromType":"2","accountTo":"' . $accountTo . '","accountToBankCode":"' . $accountToBankCode . '","amount":"' . $amount . '","annotation":null,"transferType":"' . $transferType . '"}',
            CURLOPT_HTTPHEADER     => array(
                'Api-Auth: ' . $this->Login()["auth_token"],
                'Content-Type:  application/json;charset=UTF-8',
            ),
        ));

        $response = curl_exec($curl);
        $data     = json_decode($response, true);
        return json_encode($data);
    }

    public function Transfer($accountTo, $accountToBankCode, $amount)
    {
        $verify = $this->Verify($accountTo, $accountToBankCode, $amount);
        $data   = json_decode($verify, true);

        if (isset($data["data"])) {
            $totalFee             = $data['data']['totalFee'];
            $scbFee               = $data['data']['scbFee'];
            $botFee               = $data['data']['botFee'];
            $channelFee           = $data['data']['channelFee'];
            $accountFromName      = $data['data']['accountFromName'];
            $accountTo            = $data['data']['accountTo'];
            $accountToName        = $data['data']['accountToName'];
            $accountToType        = $data['data']['accountToType'];
            $accountToDisplayName = $data['data']['accountToDisplayName'];
            $accountToBankCode    = $data['data']['accountToBankCode'];
            $pccTraceNo           = $data['data']['pccTraceNo'];
            $transferType         = $data['data']['transferType'];
            $feeType              = $data['data']['feeType'];
            $terminalNo           = $data['data']['terminalNo'];
            $sequence             = $data['data']['sequence'];
            $transactionToken     = $data['data']['transactionToken'];
            $bankRouting          = $data['data']['bankRouting'];
            $fastpayFlag          = $data['data']['fastpayFlag'];
            $ctReference          = $data['data']['ctReference'];

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL            => "https://fasteasy.scbeasy.com/v3/transfer/confirmation",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => "",
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => "POST",
                CURLOPT_POSTFIELDS     => "{\"accountFrom\":\"$accountTo\",\"accountFromName\":\"" . $accountFromName . "\",\"accountFromType\":\"2\",\"accountTo\":\"" . $accountTo . "\",\"accountToBankCode\":\"" . $accountToBankCode . "\",\"accountToName\":\"" . $accountToName . "\",\"amount\":\"" . $amount . "\",\"botFee\":0.0,\"channelFee\":0.0,\"fee\":0.0,\"feeType\":\"\",\"pccTraceNo\":\"" . $pccTraceNo . "\",\"scbFee\":0.0,\"sequence\":\"" . $sequence . "\",\"terminalNo\":\"" . $terminalNo . "\",\"transactionToken\":\"" . $transactionToken . "\",\"transferType\":\"" . $transferType . "\"}",
                CURLOPT_HTTPHEADER     => array(
                    'Api-Auth: ' . $this->Login()["auth_token"],
                    'Content-Type:  application/json;charset=UTF-8',
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
        } else {
            return $verify;
        }
    }
}

// Check Error
$api = new Scb();
// $api->SetLogin('55a717ce-ea45-5463-849a-83afa5aacca2','272727','4191545917');
// $api->SetLogin('066afcd2-678f-4f24-811d-5bd2f8ef73ba','252513','6522427352');
// $api->SetLogin('1965cf59-b6a2-4ac1-883b-b1c794ff3917','778899','4251534288');
// $api->SetLogin('7df5ee6e-49e3-bdcc-08b8-31e19e986335','272727','7512519628');       
// $api->SetLogin('56239381-8d3a-efd7-0777-8611a9a2de1f','898989','4101613441');
// $api->SetLogin('63390d2d-ca61-fdff-291a-b4bd41c53ff4','778899','4381470061');
// $api->SetLogin('03358a6b-4127-2dd7-5ed7-0f10db91562e','789789','4121689896');
// $api->SetLogin('1965cf59-b6a2-4ac1-883b-b1c794ff3917','789789','4251534288');
// $api->SetLogin('2df1d3f5-2f71-339a-4712-e1d4e0f933ee','292929','5782881625');
// $api->SetLogin('4fa2b61e-5a62-b459-066a-b5227e8de545','929292','4261638470');
// $api->SetLogin('60035751-290d-434a-b91d-b213e6341a58','062538','4096313033');
// print_r('6884370160-'.$api->GetBalance());
// print_r('8542557773-'.$api->getTransaction());1

echo '<pre>';
$api->SetLogin('4bbe85dd-6dd5-b6dd-5a31-b6cc1fa52c98', '292929', '5782883952');
print_r('4181685078-' . $api->GetBalance());
// $rateMinMax = $api->fetchBillers();
// $data = (object)[
//     'accountNo'=>'4290766004',
//     'amount'=>100,
//     'phoneNumber'=> '0649369939',
// ];
// $dataTransactionToken = $api->tranferTruewallets($data);
// // $dataTransactionToken->data->$dataTransactionToken;
// print_r($api->TopupTruewallets($dataTransactionToken->data,$data));
// $api->SetLogin('4fa2b61e-5a62-b459-066a-b5227e8de545','929292','4261638470');
// print_r('9362465762-'.$api->GetBalance());
// $api->SetLogin('8e2e5c32-5ea5-ae7a-a358-012d35bd6ea4','292929','5782881471');
// print_r('5782881471-'.$api->GetBalance());
// print_r('8542557773-'.$api->getTransaction());
// $api->SetLogin('55a717ce-ea45-5463-849a-83afa5aacca2','272727','4191545917');
// print_r('4191545917-'.$api->GetBalance());
// $api->SetLogin('4858f8ca-8de0-4efd-947c-1a8ac6a2e308','161616','7512519628');    
// print_r('7512519628-'.$api->GetBalance());
// $api->SetLogin('11e422d5-d905-45c2-b83f-04a98a6664ba','147369','4381470061');
// print_r('4381470061-'.$api->GetBalance());
// print_r('9362465754-'.$api->Verify('0934477007','99',100));
// $res = $api->Transfer('8872598261','014',2000);
// $res = $api->Transfer('1668359643','004',2000);
// $res = $api->Transfer('8542557773','014',2000);
// $res = $api->Transfer('0638269082','004',500);
// $res = $api->Transfer('3459041269','025',10000);
// 8872598261
// print_r($res);
// print_r('4381470061-'.$api->GetBalance());
