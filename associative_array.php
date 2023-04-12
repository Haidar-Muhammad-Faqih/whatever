<?php
$profileArray = [
    [
        "nama" => "Haidar Muhammad Faqih",
        "kelas" => "TI06", 
        "ipk" => 4, 
        "sudah_lulus" => false 
    ],[
        "nama" => "Zulfa Aziz Hafizhah", 
        "kelas" => "TI14", 
        "ipk" => 4, 
        "sudah_lulus" => false 
    ]
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}