<?php
function espar_o_impar($n){
   if($n%2<>0){
       echo "Numero par<br>";
    }else{
        echo "numero impar<br>";
    }
}
echo"1-Crear una funcion que muestre si un numero es par o impar<br>";
espar_o_impar(5);
function mayor_numero($n1,$n2){
    if($n1>$n2){
        echo "El mayor es:$n1<br>";
    }else{
          echo "El mayor es:$n2<br>";
    }
}
echo"2-Crear una funcion que determine el mayor de dos numeros<br>";
mayor_numero(5, 2);
function cuadrado_numero($n){
    $cuadrado=$n*$n;
    echo "el numero al cuadrado es: $cuadrado<br>";
}
echo"3-Crear una funcion para calcular el cuadrado de un numero <br>";
cuadrado_numero(5);

?>
