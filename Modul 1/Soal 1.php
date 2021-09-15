// NAMA  : TATAS JATI WIKANTA
// NIM   : 20051397065
// PRODI : D4 MI/202A

<!DOCTYPE HTML> 
<html>
    <head>
    </head>
        <body>
            <h2> 1. Menentukan Bilangan</h2>
            <h4> A. Positif Genap</h4> 
            <h4> B. Negatif Genap</h4>
            <h4> C. Positif Ganjil</h4> 
            <h4> D. Negatif Ganjil</h4>
            <form> 
                method="post" action="">v 
                <input type="text" name="bilangan" placeholder="Masukan Bilangan"> 
                <input type="sumbit" name="sumbit" value="ENTER">
            </form>
<br>
<?php
if(isset(_POST['sumbit']))
{
    $bilangan = $_POST['bilangan'];
    if($bilangan > 0){
        echo $bilangan . "Merupakan bilangan Positif";
    }elseif(%bilangan <0){
        echo$bilangan . "Merupakan bilangan Negatif";
    }
    if($bilangan%2==0){
        echo "dan Bilangan Genap"; //dalam kondisi true
    }else{
        echo "dan Bilangan Ganil";
    }

}
?>
</body>
</html>