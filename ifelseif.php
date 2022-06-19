<?php

$marks =78;
echo "The marks entered is = ",$marks,"<br>";
echo "and the grade is ";
if($marks>90){
    echo "Excellent";

}
elseif ($marks>80){
    echo "A";
}
elseif($marks>70){
    echo "B";
}
elseif($marks>60){
    echo "C";
}
elseif($marks>50){
    echo "D";
}
elseif($marks>40){
    echo "E";
}
else{
    echo "fail";
}


?>