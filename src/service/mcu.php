<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class mcu extends Bpjs {

    public function mcu($noKunjungan){
        $response = $this->get('pcare-rest-v3.0/mcu/kunjungan/'.$noKunjungan);
        return json_decode($response, true);
    }

    public function TambahMcu($data = []){
        $response = $this->post('pcare-rest-v3.0/mcu', $data);
        return json_decode($response, true);
    }

    public function UpdateMcu($data = []){
        $response = $this->put('pcare-rest-v3.0/mcu', $data);
        return json_decode($response, true);
    }

    public function HapusMcu($noKunjungan, $data = []){
        $response = $this->delete('pcare-rest-v3.0/mcu', $data);
        return json_decode($response, true);
    }

}