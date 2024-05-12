<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class poli extends Bpjs {

   public function poli($start, $limit){ 
       $response = $this->get('pcare-rest-v3.0/poli/fktp/'.$start.'/'.$limit);
       return json_decode($response, true);
   }

}