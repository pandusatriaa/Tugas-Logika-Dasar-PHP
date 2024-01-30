<?php
$bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

$kompeten = array();
$belum_kompeten = array();

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belum_kompeten[] = $nilai;
    }
}
echo "<ol>";
$hasil_kelompok = "<li>" . "Kelompok Kompeten: " . implode(", ", $kompeten) . "<br>". "<li>"."\nKelompok Belum Kompeten: " . implode(", ", $belum_kompeten) . "</li>";

echo $hasil_kelompok;
echo "</ol>";
?>
