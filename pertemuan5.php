<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function __construct($isiJari = 1) {   //method konstruktor
        $this->jari = $isiJari;     
    }

    public function tampil($nama = 'ban') {      //method tampil
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "lingkaran {$nama} hasilnya adalah: $rumus ";   
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static" ;  //method static
    }

        public function __destruct() {                 //method destruktor
        echo "<br/>";
        echo "dahlah cape!";  
    }
}

$Lingkaran = new LuasLingkaran(7);
$Lingkaran -> tampil('roda'); //cara panggil method tampil
LuasLingkaran::testing();      //cara panggil method static