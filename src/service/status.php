<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class status extends Bpjs {

   public function StatusPulang($rawatInap){ 
       $response = $this->get('pcare-rest-v3.0/statuspulang/rawatInap/'.$rawatInap);
       return json_decode($response, true);
   }

}