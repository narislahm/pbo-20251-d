<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = 'ban') {      //method tampil
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "lingkaran {$nama} hasilnya adalah: $rumus ";   
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static" ;  //method static
    }
}

$Lingkaran = new LuasLingkaran();
$Lingkaran -> jari = 7;
$Lingkaran -> tampil('roda'); //cara panggil method tampil
LuasLingkaran::testing();      //cara panggil method static