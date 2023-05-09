<?php

if(isset($_GET['n1']) && isset($_GET)){
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];


if ($n1 > $n2){
echo "$n1 é o maior valor"


} else if ($n2 > $n1){
    echo "$n2 é o maior valor"
}



} else {echo "informe os numeros " };