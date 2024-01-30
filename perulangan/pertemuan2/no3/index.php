<?php

function bandingkanNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

    echo "Jumlah karakter Nama 1 ($nama1): $panjangNama1<br>";
    echo "Jumlah karakter Nama 2 ($nama2): $panjangNama2<br>";

    if ($panjangNama1 > $panjangNama2) {
        $selisih = $panjangNama1 - $panjangNama2;
        echo "Nama 1 ($nama1) memiliki lebih banyak karakter daripada Nama 2 ($nama2) sebanyak $selisih karakter.";
    } if ($panjangNama2 > $panjangNama1) {
        $selisih = $panjangNama2 - $panjangNama1;
        echo "Nama 2 ($nama2) memiliki lebih banyak karakter daripada Nama 1 ($nama1) sebanyak $selisih karakter.";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.";
    }
}

// Contoh pemanggilan fungsi
$namaAura = "Aura";
$namaPandu = "Pandu";

bandingkanNama($namaAura, $namaPandu);

?>