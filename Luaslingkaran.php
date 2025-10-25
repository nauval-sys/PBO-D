<?php

class Luaslingkaran {

    public const phi = 3.14;
    public int $jari;

    public function __construct($isijari = 1){
        $this->jari = $isijari;
    }

    public function tampil($nama ='ban') {
    $rumus = Luaslingkaran::phi * $this->jari * $this->jari;
    echo"Lingkaran {$nama} hasilnya adalah : {$rumus}";
    }

    public static function testing () {
        echo "<br/>";
        echo "ini dari static";
    }

    public function __destruct() {
    echo "<br/>";
     echo "yes king";   
    }
}

$lingkaran = new LuasLingkaran(7);
$lingkaran->tampil('roda');
LuasLingkaran::testing();	