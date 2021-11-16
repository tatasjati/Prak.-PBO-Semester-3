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
        <h2>Soal No. 1</h2>

        <!--Programnya-->
        <?php
class Pegawai{
	public $nama;
	public	function __construct($nama){
		$this->nama = $nama;
	}
	public	function getNama(){
		return $this->nama;
	}
}

class Manajer extends Pegawai{
	public $tunjangan;
	public	function __construct($nama, $tunjangan){
		parent::__construct($nama);
		$this->tunjangan = $tunjangan;
	}
	public	function getTunjangan(){
		return $this->tunjangan;
	}
}

class Kurir extends Pegawai{
	public $gaji;
    public	function __construct($nama, $gaji){
		parent::__construct($nama);
		$this->gaji = $gaji;

	}
	public	function getGaji(){
		return $this->gaji;
	}
}

class Soal1{
	public static
	function Proses($pegawai){
		if ($pegawai instanceof Manajer){
			$man = $pegawai;
			echo "<br>Nama manajer: ".$man->nama, "\n";
			echo "<br>Tunjangan: Rp. ".strval($man->tunjangan), "\n";
		}
		else if ($pegawai instanceof Kurir){
			$kurir =  $pegawai;
			echo "<br>Nama kurir: ".$kurir->nama, "\n";
			echo "<br>Gaji: Rp. ".strval($kurir->gaji), "\n";
		}
	}
	public static
	function main($args){
		echo "Tatas Jati (20051397065)", "\n";
		$pegawai1 = new Manajer("Budiman", 100000);
		Soal1::Proses($pegawai1);
		$pegawai2 = new Kurir("Jono", 50000);
		Soal1::Proses($pegawai2);
	}
}
Soal1::main(array());
?>
        
    </div>
</body>
</html>