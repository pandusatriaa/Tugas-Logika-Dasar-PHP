<?php
//$teks = "Selamat Pagi";
//echo str_replace(" ","",$teks);
//echo '<br>';
//$nama = ['fema','putri' ];
//echo implode ("dan ",$nama);
?>   m m m mb_convert_encoding

<?php

function filterJurusan(...$jurusan)
{
    $filteredJurusan = [];

    foreach ($jurusan as $namaJurusan) {
        $jurusanCapsLock = strtoupper($namaJurusan);
        if (!in_array($jurusanCapsLock, $filteredJurusan)) {
            $filteredJurusan[] = $jurusanCapsLock;
        }
    }

    return $filteredJurusan;
}

// Contoh pemanggilan fungsi
$hasilFilter = filterJurusan("PPLG", "HTL", "KLN", "PMN", "pplg");

// Tampilkan hasil menggunakan echo
echo "Hasil Filter: ";
foreach ($hasilFilter as $jurusan) {
    echo $jurusan . " ";
}