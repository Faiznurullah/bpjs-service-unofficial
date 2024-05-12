<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class obat extends Bpjs {

    public function Obat($keyword, $start, $limit){
        $response = $this->get('pcare-rest-v3.0/obat/dpho/'.$keyword.'/'.$start.'/'.$limit);
        return json_decode($response, true);
    }

    public function ObatKunjungan($noKunjungan){
        $response = $this->get('pcare-rest-v3.0/obat/kunjungan/'.$noKunjungan);
        return json_decode($response, true);
    }

    public function HapusObat($KodeObat, $noKunjungan, $data = []){
        $response = $this->delete('pcare-rest-v3.0/obat/'.$KodeObat.'/kunjungan/'.$noKunjungan, $data);
        return json_decode($response, true);
    }

}