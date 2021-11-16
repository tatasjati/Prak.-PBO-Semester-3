<!-- Nama   : Tatas Jati Wikanta -->
<!-- NIM    : 20051397065 -->
<!-- Prodi  : D4 MI / 2020A -->
<!-- Praktikum 4 -->

<?php

class Orang{
    protected $nama, $umur;

    public function __construct($nama, $umur){
        $this->nama = $nama;
        $this->umur = $umur;
    }
}

class Dosen extends Orang{
    private $nip;

    public function __construct($nama, $umur, $nip){
        $this->nip = $nip;
        parent:: __construct($nama, $umur, $nip);
    }
    public function hasil(){
        return $this->nama . ' umur '. $this->$umur. ' NIP '. $this->$nip;
    }
}

$dosen1 = new Dosen('Hilman', 27, 19981589027);
$dosen2 = new Dosen('Fajar', 37, 19981589037);
$dosen3 = new Dosen('Prabowo', 47, 19981589047);

echo $dosen1->hasil();
echo '<br>';
echo $dosen2->hasil();
echo '<br>';
echo $dosen3->hasil();
echo '<br>';

?>
