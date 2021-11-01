<?php
//Tabungan
class Tabungan{
    protected $saldo;
}

//Pengambilan Saldo
class PengambilanUang extends Tabungan {
    private $proteksi;

    public function __construct($saldo){
        $this->saldo = $saldo;
        $this->proteksi = 1000;
    }

    public function getsaldo(){
    return 'uang yang ditabung : ' .$this->saldo . '<br> Uang yang diproteksi : ' . $this->proteksi;
    }

    public function ambiluang($jumlah){
        if ($jumlah === 4500) {
            return 'Uang yang akan diambil : '. $jumlah . 'false <br> saldo sekarang : '. $this->saldo;   
    }
        else {
            return 'Uang yang akan diambil : '. $jumlah . 'false <br> saldo sekarang : '. $this->saldo -= $jumlah;
        }
    }
}

// Run Program
$tabungan = new PengambilanUang(5000);
echo $tabungan->getsaldo();
echo '<br> ------------------------------- <br>';
echo $tabungan->ambiluang(4500);
echo '<br> ------------------------------- <br>';
echo $tabungan->ambiluang(2500);

?>