<?php
#1.-declarar un entero, n, calcular la suma de los n primeros números impares
$n=4;
$suma=0;
for ($i = 1; $i <=$n; $i++) {
    if($i%2<>0){
        $suma+=$i;
    }
}
echo "declarar un entero, n, calcular la suma de los n primeros números impares<br>";
echo "n=$n<br>";
echo "la suma es :$suma<br>";
#2.-declarar tres números y mostrarlos ordenados de mayor a menor.
$a=5;$b=3;$c=8;
echo '2.-declarar tres números y mostrarlos ordenados de mayor a menor.<br>';
echo "numeros: $a __ $b __$c <br>";
$mayor;
$menor;
$medio;
if($a>$b&& $a>$c){
    $mayor=$a;
    if ($b>$c) {
        $medio=$b;
        $menor=$c;
    } else {
    $medio=$c;
    $menor=$b;
    }
}else{
  $menor=$a;
  if ($b>$a&&$b>$c) {
      $mayor=$b;
      $medio=$c;
  } else {
      $menor=$b;
      $medio=$a;
      $mayor=$c;
  }
}

echo "ordenado: $mayor __ $medio __ $menor<br>";
#3.- declarar un número entre 0 y 9.999 y decir cuantas cifras tiene.
echo "3.- declarar un número entre 0 y 9.999 y decir cuantas cifras tiene.<br>";
 $numero=55458;
 $cifras=1;
 echo "numero= $numero<br>";
 while ($numero>10) {
    $cifras++;
    $numero=$numero/10;
}
 
 echo "Cantidad de cifras= $cifras<br>";

#4.-Imprimir los 15 primeros números y escribir la suma total.
echo '4.-Imprimir los 15 primeros números y escribir la suma total.<br>';
$suma15=0;
for ($index = 1; $index <=15; $index++) {
    echo "$index<br>";
    $suma15+=$index;
}
echo "la suma es: $suma15";


