<?php

    $lista=(array) ["Claudia","Patricia","Arciniegas"];
    for ($i=0; $i<count($lista); $i++){
         echo "$lista[$i] <br>";
         if($i==2)break;
    }


    // $i=(int) 1;
    // $g=(int) 1;
    // $con=(int) 2;
    // saltar:
    // for($i; $i<=10;){
    //     echo "<b>Hola soy el for 1 $i </b> <br>";
    //     $i++;
    //     for ($g; $g<=20; $g++){
    //         if(!($g<=$con)) { if($i==3) {goto saltar2;}
    //         echo "soy el for 2 $g <br>";
    //     }
    // }
    // saltar2:

// $i=(int) 1;
// $g=(int) 1;
// $limite=true;
// saltar1:
// for($i;$limite;){
//     echo "For saltar1 $1";
//     $i++;
//     if($i==6) { $limite=false; goto saltar;}
//     saltar2:
//     for (g; $g < 10; $g++) {
//         echo "Foe saltar2 $g <br>";
//         if($g==2) {$g=999}
//     }
//     $i++;    
// }


    // for($i=1;$i<=10; $i++){
    //     if($i>3 && $i<6) continue;
    //     echo <<<NUMEROS
    //         $i
    //     NUMEROS;
        
    // }

    // $i=(int) 0;
    // condicion:
    // if($i<10){
    //     echo <<<NUMEROS
    //     $i
    // NUMEROS;
    // $i++;
    // goto condicion;
    // }


    // $i=(int) 0;
    // $avance=(int) 2;
    // $limite =(bool) true;
    // for ($i; $limite;){
    //     $limite=(bool) ($i<12);
    //     echo <<<NUMEROS
    //         $i
    //     NUMEROS;
    //     (($i + $avance) <=10) ? $i +=$avance : $limite =false;
    // }

// for ($i=0; $i <10;) {
//     echo <<<NUMEROS
//     $i  
//     NUMEROS;
//     $i+=2;

// }

// function condicion(int $p1){
    //     return $p1 < 5;
    // }

    // $nombre = (string) null;
    // var_dump(isset($nombre));



    // $edad = (string) '';
    // if(!isset($edad)) echo "La edad no existe <br>";
    // if(is_null($edad)) echo "La edad existe pero su tipo de dato y dato es null <br>";
    // if(empty($edad)) echo "la variable edad existe y su dato en vacio <br>";
?>