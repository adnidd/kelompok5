<?php
// ini adalah class
// saran penulisan adalah huruf depan kapital

class Hewan {
    // ini adalah properties/ciri2/karakteristik
    public $mamalia;
    public $reptil;
    public $unggas;
        
    public function habitat() {
        if ($this->habitat == "D") {
            echo "Habitat : darat";
        }
        elseif ($this->habitat == "A") {
            echo "Habitat : air </br>";
        }  
        elseif ($this->habitat == "DA") {
            echo "Habitat : darat dan air<br>";
        }   
        else {
            echo "Habitat tidak diketahui<br>";
        }
    }  

        
    public function __construct($nama, $jenis, $asal, $habitat) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->asal = $asal;
        $this->habitat = strtolower($habitat);
    }
}


$animalKingdom
new Hewan ("Kucing Persia", "mamalia", "Iran", "D");
new Hewan ("Lumba-lumba pink", "mamalia", "Amerika Selatan", "A");
new Hewan ("Buaya Nil", "reptil", "Afrika", "DA");
new Hewan ("Iguana Laut", "reptil", "Ekuador", "DA");
new Hewan ("Ayam Cemani", "unggas", "Indonesia", "D");
new Hewan ("Burung Puyuh", "unggas", "Jepang", "D");

$animalKingdom = [$kucingpersia, $lumba2pink, $buayanil, $iguanalaut, $ayamcemani, $burungpuyuh];
foreach ($animalKingdom as $ak) {
    $ak->animalKingdom();
    $ak->habitat();
}