<?php

// Cara membuat pungsi
//function namafungsi(parameter){
//    code disini
//}

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}
echo "Hasilnya adalah : " . luaspersegi(10);
echo "<br>";

function nama(){
    echo "Nama saya adalah seriani";
}
nama();
echo "<br>";

//pungsi menggunakan parameter
// parameter default

function perkenalan ($nama = "ani"){
    echo "Perkenalkan Nama Saya : " . $nama;
}
perkenalan("tekyong");

?>