<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class kunjungan extends Bpjs {

    public function Kunjungan($noKunjungan){
        $response = $this->get('pcare-rest-v3.0/kunjungan/rujukan/'.$noKunjungan);
        return json_decode($response, true);
    }

    public function Riwayat($noKartu){
        $response = $this->get('pcare-rest-v3.0/kunjungan/peserta/'.$noKartu);
        return json_decode($response, true);
    }

    public function TambahKunjungan($data = []){
        $response = $this->post('pcare-rest-v3.0/kunjungan', $data);
        return json_decode($response, true);
    }

    public function UpdateKunjungan($data = []){
        $response = $this->put('pcare-rest-v3.0/kunjungan', $data);
        return json_decode($response, true);
    }

    public function HapusKunjungan($noKunjungan, $data = []){
        $response = $this->delete('pcare-rest-v3.0/kunjungan/'.$noKunjungan, $data);
        return json_decode($response, true);
    }

}