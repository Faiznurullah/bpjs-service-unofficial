<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class diagnosis extends Bpjs {

    public function Diagnosa($keyword, $start, $limit){
        $response = $this->get('pcare-rest-v3.0/diagnosa/'.$keyword.'/'.$start.'/'.$limit);
        return json_decode($response, true);
    }

}