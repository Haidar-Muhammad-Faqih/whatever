<?php
$arrayBuah = ["Blueberry","Pisang","Lychee","Avocado"];

//mengurutkan sesuai abjad
sort($arrayBuah);

//menghapus data value array paling belakang
array_pop($arrayBuah);

//menghapus data spesifik dan keseluruhan
unset($arrayBuah[1]);

//menambah data array di belakang
array_push($arrayBuah,"Mango");

//menghapus data value array paling depan
array_shift($arrayBuah);

//menambah data array di depan
array_unshift($arrayBuah,"Strawberry");


foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}