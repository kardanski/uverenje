<?php 
require_once ('spisak.php');

function proverauspeha($argument1){
    
    
    if ($argument1 <2.5 ){ $argument2="довољан (2)";}
elseif(2.5<= $argument1  and $argument1 <3.5) {$argument2="добар (3)";}
elseif(3.5<= $argument1  and $argument1 <4.5) {$argument2="врло добар (4)";}
elseif(4.5<= $argument1  and $argument1 <=5) {$argument2="одличан (5)";}
else {$argument2="nedefinisano";}
    return $argument2;
}



function uspehzadatak($brbodova1,$brbodova2,$brbodova3) {
    
    $total=$brbodova1+$brbodova2+$brbodova3;

if ($total <=49 ){ $uspehzadatak="недовољан (1)";}
elseif(50<= $total  and $total <=63) {$uspehzadatak="довољан (2)";}
elseif(64<= $total  and $total <=77) {$uspehzadatak="добар (3)";}
elseif(78<= $total  and $total <=90) {$uspehzadatak="врло добар (4)";}
elseif(91<= $total  and $total <=100) {$uspehzadatak="одличан (5)";}
else {$uspehzadatak="nedefinisano";}
    return $uspehzadatak;
    
    
}




function uspehtest($brbodovatest) {
    
    if ($brbodovatest <=50 ){ $uspehtest="недовољан(1)";}
elseif(50.5<= $brbodovatest  and $brbodovatest <=63) {$uspehtest="довољан (2)";}
elseif(63.5<= $brbodovatest  and $brbodovatest <=75) {$uspehtest="добар (3)";}
elseif(75.5<= $brbodovatest  and $brbodovatest <=87) {$uspehtest="врло добар (4)";}
elseif(87.5<= $brbodovatest  and $brbodovatest <=100) {$uspehtest="одличан (5)";}
    
else{$uspehtest="nedefinisano";}
    return $uspehtest;
    
    
}


for($i=1;$i<49;$i++){
    
    if ($i==$row['brojzadatak']){
        
        $zad1=$spisak['a'.$i];
        $zad2=$spisak['b'.$i];
        $zad3=$spisak['c'.$i];
    }
    
}

//za formatiranje uspeha da se napise na dve decimale
$uspeh1Format = number_format($row['uspeh1'],2,',',' ');
$uspeh2Format = number_format($row['uspeh2'],2,',',' ');
$uspeh3Format = number_format($row['uspeh3'],2,',',' ');
$uspeh4Format = number_format($row['uspeh4'],2,',',' ');


$brojBodovaFormat = str_replace('.',',',$row['brojbodovatest']);






?>