<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Ingrese el primer número: ";
$num1 = trim(fgets(STDIN));

echo "Ingrese el segundo número: ";
$num2 = trim(fgets(STDIN));

$num1 = floatval($num1);
$num2 = floatval($num2);

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;

if ($num2 != 0) {
    $division = $num1 / $num2;
} else {
    $division = "No se puede dividir por cero";
}

echo "\nResultados:\n";
echo "Suma: $suma\n";
echo "Resta: $resta\n";
echo "Multiplicación: $multiplicacion\n";
echo "División: $division\n";
?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function calcularFigura($figura) {
switch (strtolower($figura)) {
case "cuadrado":
echo "Ingrese el lado: ";
$lado = floatval(trim(fgets(STDIN)));
$area = $lado * $lado;
$perimetro = 4 * $lado;
echo "Área: $area\nPerímetro: $perimetro\n";
break;
case "rectangulo":
    echo "Ingrese la base: ";
    $base = floatval(trim(fgets(STDIN)));
    echo "Ingrese la altura: ";
    $altura = floatval(trim(fgets(STDIN)));
    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);
    echo "Área: $area\\nPerímetro: $perimetro\\n";
    break;

case "triangulo":
    echo "Ingrese la base: ";
    $base = floatval(trim(fgets(STDIN)));
    echo "Ingrese la altura: ";
    $altura = floatval(trim(fgets(STDIN)));
    $area = ($base * $altura) / 2;
    echo "Área: $area\\n";
    break;

case "circulo":
    echo "Ingrese el radio: ";
    $radio = floatval(trim(fgets(STDIN)));
    $area = pi() * pow($radio, 2);
    $perimetro = 2 * pi() * $radio;
    echo "Área: $area\\nCircunferencia: $perimetro\\n";
    break;

case "cubo":
    echo "Ingrese el lado: ";
    $lado = floatval(trim(fgets(STDIN)));
    $area = 6 * pow($lado, 2);
    $volumen = pow($lado, 3);
    echo "Área superficial: $area\\nVolumen: $volumen\\n";
    break;

case "esfera":
    echo "Ingrese el radio: ";
    $radio = floatval(trim(fgets(STDIN)));
    $area = 4 * pi() * pow($radio, 2);
    $volumen = (4/3) * pi() * pow($radio, 3);
    echo "Área superficial: $area\\nVolumen: $volumen\\n";
    break;

case "cilindro":
    echo "Ingrese el radio: ";
    $radio = floatval(trim(fgets(STDIN)));
    echo "Ingrese la altura: ";
    $altura = floatval(trim(fgets(STDIN)));
    $area = 2 * pi() * $radio * ($radio + $altura);
    $volumen = pi() * pow($radio, 2) * $altura;
    echo "Área superficial: $area\\nVolumen: $volumen\\n";
    break;

case "cono":
    echo "Ingrese el radio: ";
    $radio = floatval(trim(fgets(STDIN)));
    echo "Ingrese la altura: ";
    $altura = floatval(trim(fgets(STDIN)));
    $generatriz = sqrt(pow($radio, 2) + pow($altura, 2));
    $area = pi() * $radio * ($radio + $generatriz);
    $volumen = (1/3) * pi() * pow($radio, 2) * $altura;
    echo "Área superficial: $area\\nVolumen: $volumen\\n";
    break;

?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>