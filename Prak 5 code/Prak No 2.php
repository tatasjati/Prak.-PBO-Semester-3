<!-- Nama	: Tatas Jati Wikanta -->
<!-- NIM	: 20051397065 -->
<!-- Prodi	: D4 MI / 2020A -->
<!-- Praktikum 5 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5</title>
</head>
<body>
    <div class="container">
        <h2>Soal No. 2</h2>

        <!-- Programnya -->
<?php
class Pegawai{
	public  $nama;
	public $gaji;
	public	function __construct($nama, $gaji){
		$this->nama = $nama;
		$this->gaji = $gaji;
	}
	public	function infoGaji(){
		return $this->gaji;
	}
}

class Manajer extends Pegawai{
	private $tunjangan;
	public	function __construct($nama, $gaji, $tunjangan){
		parent::__construct($nama, $gaji);
		$this->tunjangan = $tunjangan;
	}
	public	function infoGaji(){
		return $this->gaji;
	}
	public	function infoTunjangan(){
		return $this->tunjangan;
	}
}

class Programmer extends Pegawai{
	private $bonus;
	public	function __construct($nama, $gaji, $bonus){
		parent::__construct($nama, $gaji);
		$this->bonus = $bonus;
	}
	public	function infoGaji(){
		return $this->gaji;
	}
	public	function infoBonus(){
		return $this->bonus;
	}
}

class Bayaran{
	public function hitungBayaran($peg){
		$uang = $peg->infoGaji();
		
		return $uang;
	}
	public static function main($args){
		echo "Tatas Jati 20051397065", "\n";
		$man = new Manajer("Budiman", 1000, 55);
		$prog = new Programmer("Jono", 700, 35);
		$hr = new Bayaran();
		echo "<br> Gaji untuk Manajer Bernama ". $man->nama." : Rp. ".strval($hr->hitungBayaran($man)), "\n";
		echo "<br>Gaji untuk Programmer Bernama ".$prog->nama. " : Rp. ".strval($hr->hitungBayaran($prog)), "\n";
	}
}
Bayaran::main(array());
	?>
        
    </div>
</body>
</html>