<?php

$a =20;
$b =10;
echo "The value of a is =",$a,"<br>";
echo "The valur of b is =",$b,"<br>";

$operator = "*";
echo "We are performing this operation * and the outcome is  ","<br>";

switch($operator){

    case "+":
        echo $a+$b;
        break;
    case "-":
        echo $a-$b;
        break;
    case "*":
        echo $a*$b;
        break;
    case "/":
        echo $a/$b;
        break;
    default:
        echo " This operation is not yet supported "   ;             


}



?>