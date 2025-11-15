<?php
//if-statment
$a=5;
$b=5;
if($a == $b){
    echo " $a and $b are equal ";
} elseif($a> $b){
    echo " $a is bigger ";
}else{
    echo " $a is smaller";
}
echo "<br>";
echo " a is $a \n ";
echo "a*2= ",$a* 2, "<br><br>";


 
//for loop and array
$arr = ["potato", " indomie" ,"tea" ,"cheese"];
for($i=0; $i < 4 ; $i++){
    echo $arr[$i], " <br> ";
}
echo "<br>";

foreach($arr as $food){
    echo "i'll eat $food , \n";
}

echo "<br><br>"; 

//switch
$temp=10;
switch($temp){
    case $temp > 25:
        echo "it's hot"; 
        break;
    case $temp < 25:
        echo " it's cold";
        break;
    case $temp==25:
        echo " it's normal";
    default:
        echo "not valid";
}

echo "<br><br>";

 //function

 function fun($str){
    echo " greeting $str";
 }
 fun("Sarah");



?>
