<?php

namespace Faiznurullah\Bpjs;
use GuzzleHttp\Client;

class Bpjs{

   private $header;
   private $consumerID;
   private $signature;
   private $timestamp;
   private $secretKey;
   private $base_url; 

   public function __construct($configurations)
   {
      $this->base_url = 'https://api.bpjs-kesehatan.go.id/'; 

      if(empty($configurations)){

          $this->consumerID = env('consumerID'); 
          
      }else{
        foreach ($configurations as $key => $val){
            if (property_exists($this, $key)) {
                $this->$key = $val;
            }
          } 
      }

     
      $this->setHeader();
      $this->setTimestamp();
      $this->generateSignature();
      
   }

   protected function setHeader(){
    $this->header = [
        'X-cons-id' => $this->consumerID,
        'X-timestamp' => $this->timestamp,
        'X-signature' => $this->signature   
    ];
    return $this->header; 
   }


   protected function setTimestamp(){
    date_default_timezone_set('UTC'); 
	$datetime = date('Y-m-d H:i:s');
    $this->timestamp = $datetime;
    return $this->timestamp;
   }

   protected function generateSignature(){
    $data = $this->consumerID . '&' . $this->timestamp;
    $signature = hash_hmac('sha256', $data, $this->secretKey, true); 
	$encodedSignature = base64_encode($signature);
    $this->signature = $encodedSignature;
    return $this->signature;
   }

   protected function get($params){
    $this->header['Content-Type'] = 'application/json; charset=utf-8';
    $url = $this->base_url . '/' . $params;
    $response = Client::request('GET',  $url, [
        'headers' => $this->header
     ]);
     $result = $response->getBody()->getContents();
     return $result; 
   }

   protected function post($params, $data = [], $header = []){

    $this->header['Content-Type'] = 'application/x-www-form-urlencoded';
    $url = $this->base_url . '/' . $params;
    $response = Client::request('POST',  $url, [
        'headers' =>  $this->header,
        'json' => $data
     ]);
     $result = $response->getBody()->getContents();
     return $result;

   }

   protected function put($params, $data = []){
    $this->header['Content-Type'] = 'application/x-www-form-urlencoded';
    $url = $this->base_url . '/' . $params;
    $response = Client::request('PUT',  $url, [
        'headers' =>  $this->header,
        'json' => $data
     ]);
     $result = $response->getBody()->getContents();
     return $result;
   }

   protected function delete($params, $data = []){
    $this->header['Content-Type'] = 'application/x-www-form-urlencoded';
    $url = $this->base_url . '/'. $params;
    $response = Client::request('DELETE',  $url, [
        'headers' =>  $this->header,
        'json' => $data
     ]);
     $result = $response->getBody()->getContents();
     return $result;
   }
    
}