<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class tindakan extends Bpjs {

    public function tindakan(){ 
       $response = $this->get('pcare-rest-v3.0/tindakan');
       return json_decode($response, true); 
    }

    public function UpdateTindakan($data = []){
        $response = $this->put('pcare-rest-v3.0/tindakan', $data);
        return json_decode($response, true);
    }

    public function HapusTindakan($kdTindakanSK, $noKunjungan, $data = []){
        $response = $this->delete('pcare-rest-v3.0/tindakan/'.$kdTindakanSK.'/kunjungan/'.$noKunjungan, $data);
        return json_decode($response, true);
    }

    public function TindakanKunjungan($noKunjungan){
        $response = $this->get('pcare-rest-v3.0/tindakan/kunjungan/'.$noKunjungan);
        return json_decode($response, true); 
    }

    public function ReferensiTindakan($kdTkp, $start, $limit){
        $response = $this->get('pcare-rest-v3.0/tindakan/kdTkp/'.$kdTkp.'/'.$start.'/'.$limit);
        return json_decode($response, true); 
    }

}