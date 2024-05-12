<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class spesialis extends Bpjs {

    public function spesialis(){
        $response = $this->get('pcare-rest-v3.0/spesialis');
        return json_decode($response, true);
    }

    public function subspesialis($kdSpesialis){
        $response = $this->get('pcare-rest-v3.0/spesialis/'.$kdSpesialis.'/subspesialis');
        return json_decode($response, true);
    }

    public function referensisarana(){
        $response = $this->get('pcare-rest-v3.0/spesialis/sarana');
        return json_decode($response, true);
    }

    public function referensikhusus(){
        $response = $this->get('pcare-rest-v3.0/spesialis/khusus');
        return json_decode($response, true);
    }

    public function rujukansubspesialis($kdSubSpesialis, $kdSarana, $tglEstRujuk){
        $response = $this->get('pcare-rest-v3.0/spesialis/rujuk/subspesialis/'.$kdSubSpesialis.'/sarana/'.$kdSarana.'/tglEstRujuk/'.$tglEstRujuk);
        return json_decode($response, true);
    }


    public function FaskesRujukanKhusus($kdKhusus, $noKartu, $tglEstRujuk){
        $response = $this->get('pcare-rest-v3.0/spesialis/rujuk/khusus/'.$kdKhusus.'/noKartu/'.$noKartu.'/tglEstRujuk/'.$tglEstRujuk);
        return json_decode($response, true);
    }

    public function RujukanKhusus($kdKhusus, $kdSubSpesialis, $noKartu, $tglEstRujuk){
        $response = $this->get('pcare-rest-v3.0/spesialis/rujuk/khusus/'.$kdKhusus.'/subspesialis/'.$kdSubSpesialis.'/noKartu/'.$noKartu.'/tglEstRujuk/'.$tglEstRujuk);
        return json_decode($response, true);
    }

}