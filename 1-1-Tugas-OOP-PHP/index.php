<?php
abstract class Hewan {
    public $nama;
    public $darah = 50;
    public $jumlahKaki;
    public $keahlian;
    public abstract function atraksi();
    abstract public function getInfoHewan();
}

abstract class Fight extends Hewan {
    public $attackPower;
    public $defensePower;
    abstract public function serang();
    abstract public function diserang();
}

class Elang extends Hewan {
    // use Fight;
    public $jumlahKaki = 2;
    public $keahlian = "terbang tinggi";
    public $attackPower = 10;
    public $defensePower = 5;
    public function atraksi() {
        echo $this->nama . ' sedang ' . $this->keahlian . PHP_EOL;
    }
    public function getInfoHewan()
    {
        echo "Informasi Elang" . PHP_EOL;
        echo "Nama : " . $this->nama . PHP_EOL;
        echo "Jumlah Kaki : " . $this->jumlahKaki . PHP_EOL;
        echo "Keahlian : " . $this->keahlian . PHP_EOL;
        echo "Darah : " . $this->darah . PHP_EOL;
        echo "Attack Power : " . $this->attackPower . PHP_EOL;
        echo "Defense Power : " . $this->defensePower . PHP_EOL;
    }
    public function serang($elang){
        echo $this->nama . " sedang menyerang " . $elang . PHP_EOL;
    }
    public function diserang(){
        echo $this->nama . " sedang diserang" . PHP_EOL;
    }
}

class Harimau extends Hewan {
    // use Fight;
    public $jumlahKaki = 4;
    public $keahlian = "lari cepat";
    public $attackPower = 7;
    public $defensePower = 8;
    public function atraksi() {
        echo $this->nama . ' sedang ' . $this->keahlian . PHP_EOL;
    }
    public function getInfoHewan()
    {
        echo "Informasi Harimau" . PHP_EOL;
        echo "Nama : " . $this->nama . PHP_EOL;
        echo "Jumlah Kaki : " . $this->jumlahKaki . PHP_EOL;
        echo "Keahlian : " . $this->keahlian . PHP_EOL;
        echo "Darah : " . $this->darah . PHP_EOL;
        echo "Attack Power : " . $this->attackPower . PHP_EOL;
        echo "Defense Power : " . $this->defensePower . PHP_EOL;
    }
    public function serang($harimau){
        echo $this->nama . " sedang menyerang " . $harimau . PHP_EOL;
    }
    public function diserang(){
        echo $this->nama . " sedang diserang" . PHP_EOL;
    }
}

$elang = new Elang();
$elang->nama = "elang_1";
$elang->getInfoHewan();
$elang->atraksi();

echo "========================" . PHP_EOL;

$harimau = new Harimau();
$harimau->nama = "harimau_1";
$harimau->getInfoHewan();
$harimau->atraksi();

$harimau->serang($elang->nama);
$elang->diserang();
?>