<?php
    $cars = array("Ferarry","Suzuki","Lamborghini", "Audi");
    $negara = array("Singapura", "Indonesia", "Jepang");
    $kota = array("Singaparma", "Indramayu", "Jepara");

    var_dump($kota);
    $kota[] = "Bogor";
    echo "<br>";
    var_dump($kota);
    $kota[4] = "Jayapura";
    echo "<br>";
    var_dump($kota);
?>