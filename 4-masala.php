<?php
function numberToWord($number) {
    // Berilgan sonni so'zlar yordamida ifodalash
    return match (($number-$number%10)/10) {
        1 => 'o\'n' ,
        2 => 'yigirma',
        3 => 'o\'ttiz',
        4 => 'qirq',
        5 => 'ellik',
        6 => 'oltmish',
        7 => 'yetmish',
        8 => 'sakson',
        9 => 'to\'qson'
    }." ". match ($number%10) {
        1 => 'bir',
        2 => 'ikki',
        3 => 'uch',
        4 => 'to\'rt',
        5 => 'besh',
        6 => 'olti',
        7 => 'yetti',
        8 => 'sakkiz',
        9 => 'to\'qqiz'
    };
}

echo numberToWord(72);  // yetti
?>