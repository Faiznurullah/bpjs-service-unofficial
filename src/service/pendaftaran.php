<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class pendaftaran extends Bpjs {

    public function NomorPendaftaran($noUrut, $date){
        $response = $this->get('pcare-rest-v3.0/pendaftaran/noUrut/'.$noUrut.'/tglDaftar/'.$date);
        return json_decode($response, true);
    }

    public function Pendaftaran($date, $start, $limit){
        $response = $this->get('pcare-rest-v3.0/pendaftaran/'.$date.'/'.$start.'/'.$limit);
        return json_decode($response, true);
    }

    public function TambahPendaftaran($data = []){
        $response = $this->post('pcare-rest-v3.0/pendaftaran', $data);
        return json_decode($response, true);
    }

    public function HapusPendaftaran($noKartu, $date, $noUrut, $kdpoli, $data = []){
        $response = $this->delete('/pcare-rest-v3.0/pendaftaran/peserta/'.$noKartu.'/tglDaftar/'.$date.'/noUrut/'.$noUrut.'/kdPoli/'.$kdpoli, $data);
        return json_decode($response, true);
    }

}