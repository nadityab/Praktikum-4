<?php

namespace kucing;

trait suara {
    public function bunyi(){
        return "Meow";
    }
}

abstract class makanan {
    abstract public function makan();
}

class kucing extends makanan{
    use suara; 

    protected $nama;
    protected $kelamin;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setKelamin($kelamin){
        $this->kelamin = $kelamin;
    }

    public function getKelamin(){
        return $this->kelamin;
    }

    public function makan(){
        return "Ikan";
    }
    
}