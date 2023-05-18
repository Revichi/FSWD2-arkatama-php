<?php
class Animal
{
    public $nama;
    public $jenis;

    function __construct($nama,$jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }
    function getInfo()
    {
        return "Hewan ini adalah " . $this->nama . " Hewan ini berjenis " . $this->jenis . ".";
    }
}
class Cat extends Animal
{
    function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "Kucing";
    }
    function getInfo()
    {
        return "Hewan ini adalah  $this->nama. $this->jenis adalah hewan yang digemari semua orang.";
    }
}
class Dog extends Animal
{
    function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "Anjing";
    }
    function getInfo()
    {
        return "Hewan ini adalah  $this->nama. $this->jenis adalah hewan yang cerdas.";
    }
}
$animal1 = new Animal("Hiu","Carnivora");
echo $animal1->getInfo() ."<br>";

$cat1 = new Cat ("Caracal");
echo $cat1->getInfo()."<br>";

$dog1 = new Dog ("Bulldog");
echo $dog1->getInfo();
?>