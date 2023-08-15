<?php

//VERIFICADOR DE NUMEROS PRIMOS

function isPrime($num){

    $contador = 0;

    if($num < 2){
        echo 'Digite apenas valores maiores que 1';
    }else{
        for($i=2; $i<=sqrt($num); $i++){

        if($num % $i == 0){

           $contador++;
        }
    }
   if($contador == 0){
    echo "O numero $num eh um numero primo";
   }else{
    echo "O numero $num nao eh um numero primo";
   }
}
}


isPrime(1);
echo '<br>';
isPrime(7);
echo '<br>';
isPrime(4);
echo '<br>';
isPrime(8);
echo '<br>';
isPrime(16);
echo '<br>';
isPrime(11);
echo '<br>';
isPrime(13);



?>