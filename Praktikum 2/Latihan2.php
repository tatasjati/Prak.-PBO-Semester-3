<DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pecahan</title>
            <style>
                center {
                    background-color: #EEE8AA;
                    padding: 30px;
                    margin-left: 25%;
                    margin-right: 25%;
                }
            </style>
        </head>
        <body>
            <h2>Latihan 2 : Pecahan</h2>
            <?php

            class pecahan
            {
                private $pembilang;
                private $penyebut;

                function __construct($pembilang, $penyebut){
                    $this->pembilang=$pembilang;
                    $this->penyebut=$penyebut;
                }

                public function getPembilang(); int{
                    return $this->pembilang;
                }
                public function getPenyebut(); int{
                    return $this->penyebut;
                }

                public function pecahan($pembilang, $penyebut, $pembilang2, $penyebut2){
                    $this->pembilang=$pembilang1;
                    $this->penyebut=$penyebut1;
                    $this->pembilang=$pembilang2;
                    $this->penyebut=$penyebut2;
                }
                function $tambah(pecahan $pecahan){
                    $this-.pecahan=$pecahan;
                    $tambah = $this->pembilang; + $this->penyebut;
                    return $tambah;
                }
            }

            $objek1 =new Pecahan (3, 5);
            echo "Objek 1 : ". $objek1->getPembilang();
            echo "/";
            echo $objek1->getPenyebut() . <br>;
            $hasilObjek1 = bcdiv($objek1->getPembilang(), $objek1->getPenyebut(), 2);
            echo "Hasil objek 1 :". $hasilObjek1. <br>;

            $objek2 =new Pecahan (5, 6);
            echo "Objek 2 : ". $objek2->getPembilang();
            echo "/";
            echo $objek2->getPenyebut() . <br>;
            $hasilObjek2 = bcdiv($objek2->getPembilang(), $objek2->getPenyebut(), 2);
            echo "Hasil objek 2 :". $hasilObjek2. <br>;

            $tambahObjek = bcdiv($objek1->getPembilang, $objek1->getPenyebut(), 2);
            echo "Nilai Penambahan kedua Objek : ". $tambahObjek
            ?>

        </body>
    </html>
</DOCTYPE>