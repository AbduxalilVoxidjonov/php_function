<!DOCTYPE html>
<html>
<head>
    <title>Kalkulyator</title>
</head>
<body>

<h2>Kalkulyator</h2>
<form method="post">
    Son 1: <input type="number" name="num1" step="any" required><br><br>
    Son 2: <input type="number" name="num2" step="any" required><br><br>
    Amal: 
    <select name="operation">
        <option value="add">Qo'shish (+)</option>
        <option value="subtract">Ayirish (-)</option>
        <option value="multiply">Ko'paytirish (*)</option>
        <option value="divide">Bo'lish (/)</option>
    </select><br><br>
    <input type="submit" name="submit" value="Hisoblash">
</form>

<?php
function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 == 0) {
                return "Nolga bo'lib bo'lmaydi";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Noto'g'ri amal tanlandi";
    }
}

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = calculate($num1, $num2, $operation);
    echo "<h3>Natija: $result</h3>";
}
?>

</body>
</html>
