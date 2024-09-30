<?php
function isPhoneNumber($phone) {
    $pattern = "/^\+998(90|91|93|94|97|99)\d{7}$/";
    return preg_match($pattern, $phone);
}

function getCompanyByPhone($phone) {

    $code = substr($phone, 4, 2); 
    
    switch ($code) {
        case '90':
        case '91':
            return "Beeline";
        case '93':
        case '94':
            return "Ucell";
        case '97':
            return "Mobiuz";
        case '99':
            return "Uzmobile";
        default:
            return "Noma'lum kompaniya";
    }
}

$phone = "+998999999999"; // Telefon raqami

if (isPhoneNumber($phone)) {
    echo "Telefon $phone raqami to'g'ri. Kompaniya: " . getCompanyByPhone($phone);
} else {
    echo "Telefon $phone raqami noto'g'ri.";
}
?>
