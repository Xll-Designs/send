<?php

$x = $_POST['first'];
$v = $_POST['veprimi'];
$y = $_POST['second'];
$to = "eri.visi10@gmail.com";

if($x && $v && $y){

   echo $x , "<br><br>" , $v , "<br><br>" , $y; 
   mail($to , $x , $v , $y);

}else{

    echo "Shkruani te dhenat ju lutem";
}



?>