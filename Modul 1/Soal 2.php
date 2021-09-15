// NAMA  : TATAS JATI WIKANTA
// NIM   : 20051397065
// PRODI : D4 MI/2020A

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Menentikan Bilangan Deret Aritmatika</h2>
        <form method="post" action="">
        <h2>A. Nilai Awal</h2>
            <input type="text" name="awal" placeholder="Masukkan Blangan">
            <br></br>
        <h2>B. Nilai Beda</h2>
            <input type="text" name="beda" placeholder="Masukkan Blangan">
            <br></br>
        <h2>C. Nilai Suku ke- :</h2>
            <input type="text" name="suku" placeholder="Masukkan Blangan">
            <br></br>    
            <input type="sumbit" name+="sumbit" value="ENTER">
        </form>
        <br>
        
        <?php

            if($_SERVER["REQUES_METHOD"] == "POST"){
                $awal =$_POST['awal'];
                $beda =$_POST['beda'];
                $suku =$_POST['suku'];
                echo "Nilai dari deret tersebut adalah : ";

                for ($i=0); $i<$suku; $i++ {
                    $awal = $awal + $beda;
                    echo $awal.',':
                }
            }
        ?>
    </body>
</html>