<?php
// ini adalah class
// saran penulisan adalah huruf depan kapital

class Hewan {
    // ini adalah properties/ciri2/karakteristik
    public $mamalia;
    public $reptil;
    public $unggas;

    // ini adalah method/behaviour/perilaku/kerja
    // saran penulisan adalah camelCase (tp boleh pake underscore)
    public function animalKingdom() {
        echo "<h3>Animal Kingdom</h3>";
        echo "Nama : ". $this->nama ."</br>";
        echo "Jenis : ". $this->jenis ."</br>";
        echo "Asal : ". $this->asal ." </br>";
        
    }

        
    public function habitat() {
        if ($this->habitat == "D") {
            echo "Habitat : darat";
        }
        elseif ($this->habitat == "A") {
            echo "Habitat : air </br>";
        }  
        elseif ($this->habitat == "DA") {
            echo "Habitat : darat dan a+ir<br>";
        }   
        else {
            echo "Habitat tidak diketahui<br>";
        }
    }  

        
    public function __construct($nama, $jenis, $asal, $habitat) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->asal = $asal;
        $this->habitat = $habitat;
    }
}


// ini pembuatan objek baru
$kucingpersia = new Hewan ("Kucing Persia", "mamalia", "Iran", "D");
$lumba2pink = new Hewan ("Lumba-lumba pink", "mamalia", "Amerika Selatan", "A");
$buayanil = new Hewan ("Buaya Nil", "reptil", "Afrika", "DA");
$iguanalaut = new Hewan ("Iguana Laut", "reptil", "Ekuador", "DA");
$ayamcemani = new Hewan ("Ayam Cemani", "unggas", "Indonesia", "D");
$burungpuyuh = new Hewan ("Burung Puyuh", "unggas", "Jepang", "D");

$animalKingdom = [$kucingpersia, $lumba2pink, $buayanil, $iguanalaut, $ayamcemani, $burungpuyuh];
foreach ($animalKingdom as $ak) {
    $ak->animalKingdom();
    $ak->habitat();
}