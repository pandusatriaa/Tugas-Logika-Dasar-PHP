<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

foreach ($data as $orang) {
    $nama = $orang['nama'];
    $tahun = $orang['tahun'];

    if ($tahun % 4 == 0 ) {
        echo $nama . " : lahir pada tahun kabisat (" . $tahun . ")<br>";
    } else {
        echo $nama . " : lahir bukan pada tahun kabisat (" . $tahun . ")<br>";
    }
}
?>