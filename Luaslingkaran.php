<?php
namespace app\math;
class Luaslingkaran {

    public const phi = 3.14;
    private int $jari;

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

