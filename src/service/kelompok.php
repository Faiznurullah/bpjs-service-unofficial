<?php

namespace Faiznurullah\Bpjs\Service;
use Faiznurullah\Bpjs\Bpjs;

class kelompok extends Bpjs {
    
    public function ClubProlanis($kdJnsKelompok){
        $response = $this->get('pcare-rest-v3.0/kelompok/club/'.$kdJnsKelompok);
        return json_decode($response, true);
    }
    
    public function KelompokTanggal($date){
        $response = $this->get('pcare-rest-v3.0/kelompok/kegiatan/'.$date);
        return json_decode($response, true);
    }
    
    public function KelompokPesertaID($eduID){
        $response = $this->get('pcare-rest-v3.0/kelompok/peserta/'.$eduID);
        return json_decode($response, true);
    }
    
    public function TambahKegiatanKelompok($data = []){
        $response = $this->post('pcare-rest-v3.0/kelompok/kegiatan', $data);
        return json_decode($response, true);
    }

    public function TambahKegiatanPeserta($data = []){
        $response = $this->post('pcare-rest-v3.0/kelompok/peserta', $data);
        return json_decode($response, true);
    }

    public function HapusKegiatanKelompok($eduId, $data = []){
        $response = $this->delete('pcare-rest-v3.0/kelompok/kegiatan/'.$eduId, $data);
        return json_decode($response, true);
    }

    public function HapusKegiatanPeserta($eduId, $noKartu, $data = []){
        $response = $this->delete('pcare-rest-v3.0/kelompok/peserta/'.$eduId.'/'.$noKartu, $data);
        return json_decode($response, true);
    }
    
}