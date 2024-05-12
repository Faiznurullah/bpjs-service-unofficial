<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class provider extends Bpjs {

   public function provider($start, $limit){ 
       $response = $this->get('pcare-rest-v3.0/provider/'.$start.'/'.$limit);
       return json_decode($response, true);
   }

}