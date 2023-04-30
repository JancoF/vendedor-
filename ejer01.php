<?php


$Vendido = $_POST['valor1'];
$hijos = $_POST['valor2'];

$comision = $Vendido * 0.075;
echo "Comisión es :" . $comision;
echo "<br>";

$bonificacion = $hijos * 50;
echo "Bonificaciíon por hijos es :" . $bonificacion;
echo "<br>";

$sueldo_bruto = 600 + $comision + $bonificacion;
echo "El sueldo bruto del vendedeor es : " . $sueldo_bruto;
echo "<br>";

$descuento = $sueldo_bruto * 0.11;
echo " El descuento es :" . $descuento;
echo "<br>";

$sueldo_final = $sueldo_bruto - $descuento;
echo "El sueldo final del vendedor es la suma de :" . $sueldo_final;
