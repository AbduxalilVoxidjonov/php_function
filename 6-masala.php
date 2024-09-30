<?php
function toqSonlarYigindisiRekursiv($n) {
    if ($n <= 0) {
        return 0;
    }
     
    if ($n % 2 != 0) {
        return $n + toqSonlarYigindisiRekursiv($n - 2); 
    } else {
        return toqSonlarYigindisiRekursiv($n - 1); 
    }
}
$n=50;
echo "1 dan $n gacha bo'lgan toq sonlar yig'indisi: " . toqSonlarYigindisiRekursiv($n);
?>
