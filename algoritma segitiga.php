<?php

class Segitiga {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function hitungKeliling($sisiA, $sisiB) {
        $sisiC = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        return $this->alas + $this->tinggi + $sisiC;
    }
}

// Contoh penggunaan
$segitiga = new Segitiga(6, 8);
echo "Luas segitiga: " . $segitiga->hitungLuas() . " satuan persegi\n";
echo "Keliling segitiga: " . $segitiga->hitungKeliling(6, 8) . " satuan\n";

?>