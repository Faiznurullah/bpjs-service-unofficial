<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class dokter extends Bpjs {

    public function Dokter($start, $limit){
        $response = $this->get('pcare-rest-v3.0/dokter/'.$start.'/'.$limit);
        return json_decode($response, true);
    }

}