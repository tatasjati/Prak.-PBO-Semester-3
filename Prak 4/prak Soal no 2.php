<!-- Nama   : Tatas Jati Wikanta -->
<!-- NIM    : 20051397065 -->
<!-- Prodi  : D4 MI / 2020A -->
<!-- Praktikum 4 -->

<?php

class rerataNilai {
    protected $value, $value2;

    public function __construct($value, $value2){
        $this->value = $value;
        $this->value2 = $value2;
    }
    public function average($value3 = 0){
        if ($value3 == 0){
            $str = $this->value . ' + '. $this->value2. ' / 2 = ';
            return $str . ($this->value += $this->value2) / 2;
        }else {
            $str = '(' . $this->value . ' + '. $this->$value2. ' + '. $this->$value2. ') / 3 =';
            return $str . ($this->value += $this->value2 += $value3) / 3;
        }
    }
}

class rerataNilai2 extends rerataNilai{
    public function __construct($value, $value2){
        parent::__construct($value, $value2);
    }
    public function average($value3 = 0){
        return parent::average($value3);
    }
}

?>