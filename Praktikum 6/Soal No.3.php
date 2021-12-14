<!-- Nama   : Tatas Jati Wikanta -->
<!-- NIM    : 20051397065 -->
<!-- Kelas  : 2020A - D4 Manajemen Informatika -->
<!-- Praktikum 6 -->

<?php

abstract class Vehicle {
    private $load = 0;
    protected $maxLoad = 0, $name;

    protected function __construct($maxLoad, $name) {
        $this->$maxLoad = $maxLoad;
        $this->$name = $name;
    }

    public function getLoad() {
        return $this->load;
    }

    public function getMaxLoad() {
        echo 'Maksimal muatan ' . $this->name . ' ' ;
        return $this->maxLoad;
    }

    abstract public function calcFuelNeeds();

    protected function calcFuelEfficiency() {
        $range = 50000000;
        $range /= $this->load;
        return $range;
    }

    protected function calcTripDistance() {
        return 500;
    }
}

interface Flyer {
        public function takeOff();
        public function land();
        public function fly();
}

class Animal  
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function eat()
    {
        return $this->name . ' sedang makan';
    }
}

class Homosapiens extends Animal {}

class Airplane2 extends Vehicle implements Flyer
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }
    
    public function takeOff()
    {
        return "$this->name lepas landas";
    }
    
    public function land()
    {
        return "$this->name mendarat";
    }

    public function fly()
    {
        return "$this->name dalam perjalanan";
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        echo $this->name . ' membutuhkan bahan bakar sebanyak ';
        
        return ceil($fuel /= $trip);
    }
}

class Superman2 extends Homosapiens implements Flyer
{
    public function takeOff()
    {
        return "$this->name mengejar Batman";
    }
    
    public function land()
    {
        return "$this->name melawan Batman";
    }

    public function fly()
    {
        return "$this->name melancarkan pukulan";
    }

    public function leapBuilding()
    {
        return "Batman terpental menabrak bangunan pencakar langit";
    }

    public function stopBullet()
    {
        return "Polisi menembaki $this->name namun ditangkis";
    }
}

$buaya = new Animal('Buaya');
$manusia = new Homosapiens('Iwan');
$airplane2 = new Airplane2(20000, 'Pelita Air');
$superman2 = new Superman2('Superman');