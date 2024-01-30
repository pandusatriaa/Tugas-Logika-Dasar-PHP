<?php

// Tampilkan nama-nama barang dari data dibawah ini, hanya yang memiliki diskon

$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'Oli Mesin',
        'diskon' => 0,
    ],
    [
        'nama' => 'Kampas Rem',
        'diskon' => 0,
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
]; 

foreach ($barang as $item) {
    if($item['diskon'] > 0) {
        echo $item['nama'];
        echo '<br>';
    }
}