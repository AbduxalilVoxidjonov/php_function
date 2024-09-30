<?php
function vaqtniAniqlash($seconds) {
    $hours = floor($seconds / 3600); // 1 soat = 3600 soniya
    $minutes = floor(($seconds % 3600) / 60); // Qolgan soniyalarni minutga ajratish
    $remainingSeconds = $seconds % 60; // Qolgan soniyalar

    return "$hours soat, $minutes minut, $remainingSeconds sekund o'tdi";
}


$n = 21121; 
echo vaqtniAniqlash($n);
?>
