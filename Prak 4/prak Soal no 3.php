<!-- Nama   : Tatas Jati Wikanta -->
<!-- NIM    : 20051397065 -->
<!-- Prodi  : D4 MI / 2020A -->
<!-- Praktikum 4 -->

<?php

class Katak{
    protected $nama, $umur;

    public function __construct($nama, $umur){
        $this->nama = $nama;
        $this->umur = $umur;
    }
    public function caraGerak(){
        return 'Melompat';
    }
    public function getNama(){
        return $this->nama;;
    }
    public function getUmur(){
        return $this->umur;
    }
}

class Kecebong extends Katak{
    private $panjangEkor;

    public function __construct($nama, $umur, $ekor){
        $this->panjangEkor = $ekor;
        parent::__construct($nama, $umur);
    }
    public function getpanjangEkor(){
        return $this->panjangEkor;
    }
    public function caraGerak(){
        return 'Berenang';
    }
}


$katak = new katak(5, 'Froggy');
$kecebong = new kecebong(5, 'Junior Froggy' , 10);

?>
