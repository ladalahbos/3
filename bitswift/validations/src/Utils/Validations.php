<?php
require_once './bitswift/autoload.php';
use BlakeGardner\MacAddress;

class Validations 
{
  public $curl;
  public $privateKey;
  public $publicKey;
  public $url;
  public $response;
  public $deviceID;
  
  function __construct($publicKey = '', $privateKey = '', $url = '')
  {
    $value = $this->getMacAddress();
    $this->publicKey = $publicKey;
    $this->privateKey = $privateKey;
    $this->deviceID = $value;
    $this->url = $url;

    $this->response = $this->getValidations();
  }

  protected function getValidations() {

    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $this->url.'api/validation',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_SSL_VERIFYHOST=> 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ".$this->generateToken(),
        "DeviceID:".$this->deviceID,
        "Content-Type: application/json"
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return json_decode($response);
  }


  protected function generateToken()
  {

    $publicKey = $this->publicKey;
    $privateKey = $this->privateKey;

    return base64_encode(md5($publicKey.$privateKey));
  }


  protected function getMacAddress()
  {
    if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
      $data = $this->windows();
    } else {
      $data =  $this->linux();
    }

    return $data;
  }

  protected function linux()
  {
    $mac = shell_exec("ip link | awk '{print $2}'");
    preg_match_all('/([a-z0-9]+):\s+((?:[0-9a-f]{2}:){5}[0-9a-f]{2})/i', $mac, $matches);
    $output = array_combine($matches[1], $matches[2]);

    $mac = '';

    foreach ($output as $key => $list) {
      $mac = $list;
    }
    $value = "RG43S_".strtoupper(md5($mac));
    return $value;
  }


  protected function windows(){
    exec("C:\windows\system32\ipconfig /all", $out, $res);
    foreach (preg_grep('/^\s*Physical Address[^:]*:\s*([0-9a-f-]+)/i', $out) as $line) {
      $mac[] = substr(strrchr($line, ' '), 1);
    }
    $mac = str_replace("-", "", $mac[0]);
    $value = "RG43S_".strtoupper(md5($mac));
    return $value;
  }
}