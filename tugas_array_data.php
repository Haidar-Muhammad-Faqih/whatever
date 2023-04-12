<?php
$ns1 = ['id'=>1,'nim'=>'01110','nama'=>'Haidar Muhammad Faqih','uts'=>100,'uas'=>100,'tugas'=>100];
$ns2 = ['id'=>2,'nim'=>'01121','nama'=>'Muhammad Rifki Ali Akbar','uts'=>80,'uas'=>98,'tugas'=>100];
$ns3 = ['id'=>3,'nim'=>'01132','nama'=>'Davi Rafiki Rochman','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01143','nama'=>'Bagas Kusumaraharja','uts'=>90,'uas'=>91,'tugas'=>82];
$ns5 = ['id'=>5,'nim'=>'01154','nama'=>'Mochamad Ilham Maulana','uts'=>80,'uas'=>84,'tugas'=>78];
$ns6 = ['id'=>5,'nim'=>'01165','nama'=>'Junanda ari Prambudi','uts'=>70,'uas'=>50,'tugas'=>68];
$ns7 = ['id'=>5,'nim'=>'01176','nama'=>'Muhammad Ardi Dzulkarnain','uts'=>78,'uas'=>90,'tugas'=>84];
$ns8 = ['id'=>5,'nim'=>'01187','nama'=>'Sobrun Zahran Sanata','uts'=>100,'uas'=>98,'tugas'=>100];
$ns9 = ['id'=>5,'nim'=>'01198','nama'=>'Ahmad krisna Aprianto','uts'=>76,'uas'=>96,'tugas'=>86];
$ns10 = ['id'=>5,'nim'=>'01109','nama'=>'Ahmad Ihsanullah Rabbani','uts'=>86,'uas'=>78,'tugas'=>98];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5, $ns6, $ns7, $ns8, $ns9, $ns10];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Daftar Nilai Mahasiswa</title>
</head>
<body>
  <div class="container">
    <h3 class="text-center mt-5 mb-4">Daftar Nilai Mahasiswa</h3>
     <table class="table table-hover">
        <thead class="thead-dark table-striped">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($ar_nilai as $ns){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['nama'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
            }
            ?>
        </tbody>
    </table>
  </div>
</body>
</html>