<!-- Nama   : Tatas Jati Wikanta -->
<!-- NIM    : 20051397065 -->
<!-- Prodi  : D4 MI / 2020A -->

<!-- Tugas Praktikum 3 -->

<?php

//Tabungan
class Tabungan{
    protected $saldo;
}

//Ambil Saldo
class MengambilUang extends Tabungan {
    private $proteksi;
    public function __construct($saldo){
        $this->saldo =$saldo;
        $this->proteksi = 1000;
    }
    public function getSaldo(){
        return 'Uang ditabung : '. $this->saldo . '<br> Uang yang diproteksi : ' . $this->$proteksi;

    }
    public function ambilUang($jumlah){
        if ($jumlah === 4500){
            return 'Uang diambil :'. $jumlah . 'false <br> Saldo sekarng : '. $this->$saldo;

        }else{
            return 'Uang diambil : '. $jumlah . 'false <br> Saldo sekarng : '. $this->$saldo -= $jumlah;
        }

    }
}

//Tes jalan
$Tabungan = new MengambilUang(5000);
echo $Tabungan->getSaldo();
echo '<br> =========================== <br>';
echo $Tabungan->ambilUang(4500);
echo '<br> =========================== <br>';
echo $Tabungan->ambilUang(2500);

?>
