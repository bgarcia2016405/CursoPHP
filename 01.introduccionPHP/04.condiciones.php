<?php

#condiciones
$a = 5;
$b = 10;

if($a > $b){
    echo "a es mayor a b";
}else if($a == $b){
    echo "a es igual que     b";
}else{
    echo "a es menor que b<br><br>";
    
}

#suiches
$dia = "sabado";
switch($dia){

    case 'sabado':
        echo "voy a estudiar php";
        break;
    case 'viernes':
        echo "voy a la fiesta";
        break;
    case 'domingo':
        echo "voy a descansar";
        break;
    default:
        echo "voy a la universidad";
}

echo "<br><br>";

#while
$n = 1;
while($n <= 5){
    echo $n;
    $n++;
}
echo "<br><br>";

#do while
$p = 1;

do{
    echo $p;
    $p++;
}while($p <= 5);
echo "<br><br>";

#for

for($i = 1; $i <= 5; $i++){
    echo $i;
}

?>