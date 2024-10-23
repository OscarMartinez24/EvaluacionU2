<?php
/* CBTIS89
Programa que almacena 5 precios y les saca iva, descuento y su total todo sumado
Martinez Navarro Oscar Said 
3°A Matutino
*/

$arrayPrecios= array(500,400,200,700,100);
$arrayIVA=array();
$arraySubtotal=array();
$arrayDescuento=array();
$arrayTotal=array();

for ($i=0; $i<5; $i++){
$arrayIVA[$i] = $arrayPrecios[$i] * 0.16;
$arraySubtotal[$i]= $arrayPrecios[$i]+$arrayIVA[$i];
$arrayDescuento[$i] = $arraySubtotal[$i]*0.10;
$arrayTotal[$i] = $arraySubtotal[$i]-$arrayDescuento[$i];
}
echo "<br>";

echo "Arreglo Precios <br>";
for($i=0; $i<5; $i++){
	

	echo $arrayPrecios[$i];
	echo "<br>";
}
echo "<br>";

echo "Arreglo IVA <br>";
	for($i=0; $i<5; $i++){
		
	echo $arrayIVA[$i];
	echo "<br>";
}
echo "<br>";

echo "Arreglo Subtotal <br>";
for($i=0; $i<5; $i++){
	

	echo $arraySubtotal[$i];
	echo "<br>";
}
echo "<br>";

echo "Arreglo Descuentos <br>";
for($i=0; $i<5; $i++){
	
	echo $arrayDescuento[$i];
	echo "<br>";
}
echo "<br>";

echo "Arreglo Total <br>";
for($i=0; $i<5; $i++){
	echo $arrayTotal[$i];
	echo "<br>";
}

echo "<br>";



?>