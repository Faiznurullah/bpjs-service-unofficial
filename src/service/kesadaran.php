<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class kesadaran extends Bpjs {

    public function Kesadaran(){
        $response = $this->get('kesadaran');
        return json_decode($response, true);
    }

}