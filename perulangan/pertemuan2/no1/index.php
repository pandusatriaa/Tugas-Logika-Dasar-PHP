<?php
function formatIDN($date) {
    $englishDays = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
    $indonesianDays = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
    $englishMonths = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    $formattedDate = str_replace($englishDays, $indonesianDays, $date);

    return $formattedDate;
}

// Tanggal awal
$date = date('D, d M Y');
echo $date;
echo " vs ";
echo formatIDN($date);
?>
