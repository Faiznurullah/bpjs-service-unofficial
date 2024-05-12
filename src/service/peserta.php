<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class peserta extends Bpjs {

     public function peserta($keyword){
       $response = $this->get('pcare-rest-v3.0/peserta/'.$keyword);
       return json_decode($response, true);

     }

     public function PesertaOlehJenisKartu($jnsKartu, $keyword){
        $response = $this->get('pcare-rest-v3.0/peserta/'.$jnsKartu.'/'.$keyword);
        return json_decode($response, true); 
      }


}